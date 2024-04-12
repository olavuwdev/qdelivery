<?php

class Redes{

    private int $id;
    private array $data;
    private bool $resultado;

    private const BD = 'redes_sociais';


    public function criarRedes(array $data):bool{
        $this->data = $data;
        if($this->verificaCampos($this->data)){
            return $this->resultado = false;
            exit();
        }

        $this->filtroBanco();
        return $this->salvarNoBanco();
        
    }
    public function getResultado():bool{
        return $this->resultado;
    }

    //Metodos privados

    private function verificaCampos(array $data):bool{
        return in_array('', $data);
    }
    #Contra SQL Injector
    private function filtroBanco():void{
        unset($this->data['id'], $this->data['sheep_firewall']);

        $this->data = array_map('trim', $this->data);
        $this->data = array_map('htmlspecialchars', $this->data);
        preg_replace('/[^[:alnum:]@]/', '', $this->data);

        $this->data['icone'] = (string) $this->data['icone'];
        $this->data['nome'] = (string) $this->data['nome'];
        $this->data['link'] = (string) $this->data['link'];
        $this->data['tipo'] = (string) $this->data['tipo'];
        $this->data['tipo_cadastro'] = (string) $this->data['tipo_cadastro'];

        if($this->data['tipo_cadastro'] == 'criar'){
            $this->data['data'] = (string) date('Y-m-d H:i:s');
            $this->data['dia'] = (string) date('d');
            $this->data['mes'] = (string) date('m');
            $this->data['ano'] = (string) date('Y');
        }


    }
    private function salvarNoBanco():bool{
        $salvar = new Criar();
        $salvar->Criacao(self::BD, $this->data);
        if($salvar->getResultado()){
            return $this->resultado = true;
        }
    }

}



?>