<?php

class Dados
{

    private int $id;
    private array $data;
    private bool $resultado;
    private const BD = 'dados';



    //Metodos da classe dados

    public function atualizarDados(int $id, array $data): bool
    {
        $this->data = $data;
        $this->id = $id;

        if (!$this->data) {
            return $this->resultado = false;
            exit();
        }

        $this->filtroBancoDeDados();
        $this->enviaLogo();
        $this->enviaIcone();
        return $this->salvarNoBanco();
    }



    public function getResultado(): bool
    {
        return $this->resultado;
    }

    private function enviaLogo(): void
    {
        if (isset($this->data['logo'])) {
            $ler = new Ler();
            $ler->Leitura(self::BD, "WHERE id = :id", "id={$this->id}");
            if ($ler->getResultado()) {

                $logo = SHEEP_IMG_LOGOMARCA . $ler->getResultado()[0]['logo']; //Caminho da pasta + imagem
                //Validando se a imagem ja existe no sistema
                if (file_exists($logo) && !is_dir($logo)) {
                    unlink($logo);
                }
                //Upando imagem no banco
                $enviaLogo = new Uploads(SHEEP_IMG_LOGOMARCA);
                $urlLogo = Formata::Name($this->data['nome']) . '-logo-' . Formata::Name(date('H:i:s') . '-' . time());
                $enviaLogo->Image($this->data['logo'], $urlLogo);
            }
        }

        if (isset($enviaLogo) && $enviaLogo->getResult()) {
            $this->data['logo'] = $enviaLogo->getResult();
        } else {
            unset($this->data['logo']);
        }
    }
    private function enviaIcone(): void
    {
        if (isset($this->data['icone'])) {
            $ler = new Ler();
            $ler->Leitura(self::BD, "WHERE id = :id", "id={$this->id}");
            if ($ler->getResultado()) {

                $icone = SHEEP_IMG_LOGOMARCA . $ler->getResultado()[0]['icone']; //Caminho da pasta + imagem
                //Validando se a imagem ja existe no sistema
                if (file_exists($icone) && !is_dir($icone)) {
                    unlink($icone);
                }
                //Upando imagem no banco
                $enviaIcone = new Uploads(SHEEP_IMG_LOGOMARCA);
                $urlIcone = Formata::Name($this->data['nome']) . '-icone-' . Formata::Name(date('H:i') . '-' . time());
                $enviaIcone->Image($this->data['icone'], $urlIcone);
            }
        }

        if (isset($enviaIcone) && $enviaIcone->getResult()) {
            $this->data['icone'] = $enviaIcone->getResult();
        } else {
            unset($this->data['icone']);
        }
    }
    private function filtroBancoDeDados(): void
    {
        $logoFiltro = $this->data['logo'];
        $iconeFiltro = $this->data['icone'];
        $descricao = $this->data['descricao'];

        unset($this->data['descricao'], $this->data['logo'], $this->data['icone'], $this->data['id'], $this->data['sheep_firewall']);
        $this->data = array_map('trim', $this->data);
        $this->data = array_map('htmlspecialchars', $this->data);
        preg_replace('/[^[:alnum:]@]/', '', $this->data);

        $this->data['nome'] = (string) $this->data['nome'];
        $this->data['cnpj'] = (string) $this->data['cnpj'];
        $this->data['fone'] = (string) $this->data['fone'];
        $this->data['whatsapp'] = (string) $this->data['whatsapp'];
        $this->data['frete'] = $this->data['frete'];
        $this->data['email'] = (string) $this->data['email'];
        $this->data['endereco'] = (string) $this->data['endereco'];
        $this->data['numero'] = (int) $this->data['numero'];
        $this->data['bairro'] = (string) $this->data['bairro'];
        $this->data['estado'] = (int) $this->data['estado'];
        $this->data['cidade'] = (int) $this->data['cidade'];
        $this->data['cep'] = (string) $this->data['cep'];
        $this->data['usuario'] = (int) $this->data['usuario'];
        $this->data['senha_email'] = (string) $this->data['senha_email'];
        
        
        $this->data['descricao'] = $descricao;
        $this->data['icone'] = $iconeFiltro;
        $this->data['logo'] = $logoFiltro;



    
    }
    private function salvarNoBanco(): bool
    {
        $atualizar = new Atualizar();
        $atualizar->Atualizando(self::BD, $this->data, "WHERE id = :id", "id={$this->id}");
        if($atualizar->getResultado()){
            return $this->resultado = true;
        }
    }
}
