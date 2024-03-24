<?php

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
//SE NÃO EXISTIR SESSÃO ELA NÃO É INICIADA
if (!isset($_SESSION['sheep_user'])) {
    unset($_SESSION['sheep_user']);
    header("Location: " . URL_CAMINHO_PAINEL . "index.php");
    exit();
}
