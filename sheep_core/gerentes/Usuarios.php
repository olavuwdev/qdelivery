<?php

class Usuarios
{
    private int $id;
    private array $data;
    private bool $resultado;
    public function inserirUsuario(array $data): bool
    {
        $this->data = $data;

        if ($this->verificaExistencia('email') || $this->verificaExistencia('cpf')) {
            return $this->resultado = false;
            exit();
        }

        if ($this->verificaCamposVazios($this->data)) {
            return $this->resultado = false;
            exit();
        }

        $this->filtroBancoDeDados();
        $this->enviaFoto();
        return $this->cadastraUsuarioBd();
    }

    private const BD = 'usuarios';

    #Atualizar perfil do usuario
    public function atualizaUsuario(int $id, array $data):bool{
        $this->id = $id;
        $this->data = $data;
        if(empty($this->data['senha'])){
            unset($this->data['senha']);
        }else{
            $this->data['senha'] = password_hash($this->data['senha'], PASSWORD_DEFAULT, ['const' => 10]);
        }
        if ($this->verificaExistenciaUp('email') || $this->verificaExistenciaUp('cpf')) {
            return $this->resultado = false;
            exit();
        }

        
        $this->atualizaFoto();
        return $this->vamosSalvarUsuario();
    }

    public function excluirUsuario(int $id): bool
    {
        $this->id = $id;
        if(!$this->id){
            return $this->resultado = false;
            exit();
        }
        /*
        if ($this->verificaNivel('nivel')) {
            return $this->resultado = false;
            exit();
        }
        */
        $this->removerFoto();
        return $this->removendoUsuarioBd();
    }
    public function getResultado(): bool
    {
        return $this->resultado;
    }

    private function verificaCamposVazios(array $data): bool
    {
        return in_array('', $data);
    }

    private function verificaExistencia($campo): array
    {
        $ler = new Ler();
        $ler->Leitura(self::BD, "WHERE {$campo} = :{$campo}", "{$campo}={$this->data[$campo]}");
        return $ler->getResultado();
    }
    private function verificaExistenciaUp($campo): bool{
        $ler = new Ler();
        $ler->Leitura(self::BD, "WHERE {$campo} = :{$campo}", "{$campo}={$this->data[$campo]}");
        return $ler->getContaLinhas() > 1; 
    }

    //Em construção, validar se o usuario tem permissão para excluir
    private function verificaNivel($campo): bool{
        $ler = new Ler();
        $ler->Leitura(self::BD, "WHERE {$campo} = :{$campo}",  "id = {$this->data['id']} and {$campo}= 'M'");
        return $ler->getResultado() >= 1; 
    }

    private function enviaFoto(): void
    {
        if (isset($this->data['foto'])) {
            $enviaFoto = new Uploads(SHEEP_IMG_USUARIOS);
            $nomeFoto = Formata::Name($this->data['nome']) . '-' . Formata::Name($this->data['sobrenome']) . '-' . time() . '-' . Formata::Name(date('Y-m-d H:i'));
            $enviaFoto->Image($this->data['foto'], $nomeFoto);
            if ($enviaFoto->getResult()) {
                $this->data['foto'] = $enviaFoto->getResult();
            } else {
                $this->data['foto'] = null;
            }
        }
    }
    private function atualizaFoto():void{
        if(isset($this->data['foto'])){
            $lerFoto = new Ler();
            $lerFoto->Leitura(self::BD, "WHERE id = :id", "id={$this->id}");
            $foto = SHEEP_IMG_USUARIOS . $lerFoto->getResultado()[0]['foto'];
            #Apagando foto 
            if(file_exists($foto) && !is_dir($foto)){
                unlink($foto);
            }
            #Upando foto nova
            $enviaFoto = new Uploads(SHEEP_IMG_USUARIOS);
            $nomeFoto = Formata::Name($this->data['nome']) . '-' . Formata::Name($this->data['sobrenome']) . '-' . time() . '-' . Formata::Name(date('Y-m-d H:i'));
            $enviaFoto->Image($this->data['foto'], $nomeFoto);

        }
        if(isset($enviaFoto) && $enviaFoto->getResult()){
            if(isset($this->data['foto'])){
                $this->data['foto'] = $enviaFoto->getResult();
            }else{
                unset($this->data['foto']);
            }
        }else{
            unset($this->data['foto']);
        }
    }
    private function removerFoto():void
    {
        $lerFoto = new Ler();
        $lerFoto->Leitura(self::BD, "WHERE id = :id", "id={$this->id}");
        $foto = SHEEP_IMG_USUARIOS . $lerFoto->getResultado()[0]['foto'];
        #Apagando foto 
        if(file_exists($foto) && !is_dir($foto)){
            unlink($foto);
        }
    }

    private function filtroBancoDeDados(): void
    {
        $foto = $this->data['foto'];
        unset($this->data['foto'],  $this->data['id'],  $this->data['sheep_firewall']);

        $this->data = array_map('trim', $this->data);
        $this->data = array_map('htmlspecialchars', $this->data);
        preg_replace('/[^[:alnum:]@]/', '', $this->data);
        $this->data['nome'] = (string) $this->data['nome'];
        $this->data['sobrenome'] = (string) $this->data['sobrenome'];
        $this->data['cpf'] = (string) $this->data['cpf'];
        $this->data['email'] = (string) $this->data['email'];
        $this->data['nascimento'] = (string) $this->data['nascimento'];
        $this->data['whatsapp'] = (string) $this->data['whatsapp'];
        $this->data['endereco'] = (string) $this->data['endereco'];
        $this->data['numero'] = (int) $this->data['numero'];
        $this->data['cep'] = (string) $this->data['cep'];
        $this->data['estado'] = (int) $this->data['estado'];
        $this->data['cidade'] = (int) $this->data['cidade'];
        $this->data['status'] = (string) $this->data['status'];
        $this->data['nivel'] = (string) $this->data['nivel'];
        $this->data['tipo'] = (string) $this->data['tipo'];
        $this->data['tipo_cadastro'] = (string) $this->data['tipo_cadastro'];
        $this->data['foto'] = $foto;

        if($this->data['tipo_cadastro'] == 'criar') {
            $this->data['data'] = date('Y-m-d H:i:s');
            $this->data['dia'] = date('d');
            $this->data['mes'] = date('m');
            $this->data['ano'] = date('Y');
        }
        if(isset($this->data['data'])) {
            $this->data['senha'] = password_hash($this->data['senha'], PASSWORD_DEFAULT, ['const' => 10]);
        }

        #$this->data['senha'] = (string) $this->data['senha'];
    }

    private function cadastraUsuarioBd(): bool{
        $cadastrar = new Criar();
        $cadastrar->Criacao(self::BD, $this->data);
        if($cadastrar->getResultado()){
            return $this->resultado = true;
        
        }
    }

private function vamosSalvarUsuario(): bool
{
    $atualizar = new Atualizar();
    $atualizar->Atualizando(self::BD, $this->data, "WHERE id = :id", "id={$this->id}");
    if($atualizar->getResultado()){
        return $this->resultado = true;
    }
}
private function removendoUsuarioBd(): bool
{
    $excluir = new Excluir();
    $excluir->Remover(self::BD, "WHERE id = :id", "id={$this->id}");
    if($excluir->getResultado()){
        return $this->resultado = true;
    }
}



}
?>