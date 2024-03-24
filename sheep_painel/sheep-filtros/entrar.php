<?php

ob_start();
session_start();
require_once('../../sheep_core/config.php');

$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if($email == null || $senha == null){
    header("Location: " . URL_CAMINHO_PAINEL ."index.php?campos_vazios=true");
    return false;
    exit();

}

$verificar = new Entrar();
$verificar->acessoPainel($email, $senha);
if($verificar->getResultado()){
    $_SESSION['sheep_user'] = $verificar->getResultado();
    header("Location: " . URL_CAMINHO_PAINEL . "sheep.php");
}else{
    unset($_SESSION['sheep_user']);
    header("Location: ". URL_CAMINHO_PAINEL . "index.php?senha_errada=true");
    exit();
}


?>