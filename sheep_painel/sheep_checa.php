<?php
ob_start(); //REDIRECIONAMENTOS
session_cache_expire(60); //DEFINE O TEMPO PARA EXPIRAR O LOGIN 
session_start(); //INICIA O TIME DO LOGIN
require('../sheep_core/config.php');

$sheep = new Ler();


$sair = filter_input(INPUT_GET, 'sair', FILTER_VALIDATE_BOOLEAN);
if ($sair) {
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php?saiu=true");
    exit();
}
//VERIFICA SE O USUARIO TEM PERMISSÃO PARA FAZER LOGIN NA AREA RESTRITA A ADM
if ($_SESSION['sheep_user']['nivel'] != 'M') {
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php?restrito_adm=true");
    exit();
}
//VERIFICA SE O USUARIO ESTA COM STATUS ATIVO
if ($_SESSION['sheep_user']['status'] != 'S') {
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php");
    exit();
}
//SE NÃO EXISTIR SESSÃO ELA NÃO É INICIADA
if (!$_SESSION['sheep_user']) {
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php");
    exit();
}

//PROTEÇÃO PARA FORMULARIOS
$_SESSION['_sheep_firewall'] = (!isset($_SESSION['_sheep_firewall'])) ? hash('sha512', random_int(100, 50000)) : $_SESSION['_sheep_firewall'];

//PROTEÇÃO PARA URL
$_SESSION['timeWT'] = (!isset($_SESSION['timeWT'])) ? time() : $_SESSION['timeWT'];



$see_uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$ms = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>