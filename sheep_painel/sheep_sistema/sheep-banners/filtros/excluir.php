<div class="main-content">

 <!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 <?php include_once('./token.php'); ?>
 <!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<?php 
//proteção para formulario com sessão de login
require_once('sheep-filtros/valida.php');

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
if(isset($id)){
    $excluir = new Banners();
    $excluir->excluirBanner($id);
    if($excluir->getResultado()){
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-banners/index&sucesso=true&token={$_SESSION['timeWT']}");
        
    }else{
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-banners/index&erro=true&token={$_SESSION['timeWT']}");
    }
}


?>

</div>