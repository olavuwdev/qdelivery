<div class="main-content">

 <!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 <?php include_once('./token.php'); ?>
 <!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<?php 
//proteção para formulario com sessão de login
require_once('sheep-filtros/valida.php');


$excluir = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if(isset($excluir)){
    echo $excluir;
    exit();

    $salvar = new  Redes();
    $salvar->excluirRedes($excluir);
    if($salvar->getResultado()){
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-redes/index&sucesso=true&token={$_SESSION['timeWT']}");
        exit();
    }else{
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-redes/index&erro=true&token={$_SESSION['timeWT']}");
    }
}

?>

</div>