<div class="main-content">

 <!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 <?php include_once('./token.php'); ?>
 <!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<?php 
//proteção para formulario com sessão de login
require_once('sheep-filtros/valida.php');

<<<<<<< HEAD
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

if(isset($id)){
    $excluir = new Slide();
    $excluir->excluirSlide($id);
    if($excluir->getResultado()){
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-slide/index&sucesso=true&token={$_SESSION['timeWT']}");
    }else{
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-slide/index&erro=true&token={$_SESSION['timeWT']}");

    }
}
=======
>>>>>>> d5e2566c4ca863caefac3628a21b82f6c7d5381e

?>

</div>