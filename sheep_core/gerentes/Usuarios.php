<?php

class Usuarios{
    private int $id;
    private array $data;
    private bool $resultado;
    public function inserirUsuario(array $data): bool
    {
        $this->data = $data;

        if($this->verificaExistencia('email') || $this->verificaExistencia('cpf')){
            return $this->resultado = false;
            exit();
        }

        if($this->verificaCamposVazios($this->data)){
            return $this->resultado = false;
            exit();
        }

        $this->filtroBancoDeDados();
        $this->enviaFoto();
        return $this->cadastraUsuarioBd();


    } 

    private const BD = 'usuarios';

    public function getResultado():bool{
        return $this->resultado;

    }

    private function verificaCamposVazios(array $data):bool
    {
        return in_array('', $data);
    }

    private function verificaExistencia($campo):array{
        
    }
    private function filtroBancoDeDados():void{

    }
    private function enviaFoto():void{

    }
    private function cadastraUsuarioBd():bool{

    }

}

?>