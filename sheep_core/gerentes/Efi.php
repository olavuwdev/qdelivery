<?php

class Efi{

    private $id;
    private array $data;
    private bool $resultado;
    private const BD = 'banco_efi';


    public function atualizarEfi(int $id, array $data):bool{
        $this->id = $id;
        $this->data = $data;
        if($this->camposVazios($this->data)){
            return $this->resultado =  false;
            exit();
        }
        $this->filtroBanco();
        return $this->salvarBanco();
    }


    
    public function getResultado():bool{
        
        return $this->resultado;
    }

    private function camposVazios(array $data): bool{
        return in_array('', $data);
    }

    private function filtroBanco():void{
        unset($this->data['sheep_firewall'], $this->data['id']);
        $this->data = array_map('trim', $this->data);
        $this->data = array_map('htmlspecialchars', $this->data);
        preg_replace('/[^@[:alnum:]@]/', '', $this->data);


        $this->data['chave_1'] = (string) $this->data['chave_1'];
        $this->data['chave_2'] = (string) $this->data['chave_2'];
        $this->data['status'] = (string) $this->data['status'];
        $this->data['usuario'] = (int) $this->data['usuario'];
    }
    private function salvarBanco():bool{
        $salvar = new Atualizar();
        $salvar->Atualizando(self::BD, $this->data, "WHERE id = :id", "id={$this->id}");
        if($salvar->getResultado()){
            return $this->resultado = true;
        }
    }

}

?>