<?php
/**
* CLASSES RESPONSAVEL PELO LOGIN DO SITE
* 
*/


class Entrar
{
    private string $email;
    private string $senha;
    private $resultado;

    /**
     * @param STRING $email = email de acesso
     * @param STRING $senha = senha de acesso
     */
    public function acessoPainel($email, $senha){
        $this->email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $this->senha = trim($senha);

        if(!Formata::Email($this->email)){
            return $this->resultado = false;
        }
        $this->verificaUsuario();
    }
    public function getResultado(){
        return $this->resultado;
    }

    private function verificaUsuario(){
        $ler = new Ler();
        $ler->Leitura('usuarios', "WHERE email = :email", "email={$this->email}");
        if($ler->getResultado() && password_verify($this->senha, $ler->getResultado()[0]['senha'])){
            return $this->resultado = $ler->getResultado()[0];
        }else{
            return $this->resultado = false;
        }
        
    }


}


?>