<div class="main-content">

 <!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 <?php include_once('./token.php'); ?>
 <!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<?php 
//proteção para formulario com sessão de login
require_once('sheep-filtros/valida.php');

<<<<<<< HEAD
$atualizar = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
if(isset($atualizar['sendSheep'])){
    unset($atualizar['sendSheep']);

    $atualizar['capa'] = $_FILES['capa']['tmp_name'] ? $_FILES['capa'] : null;
    if($atualizar['sheep_firewall'] != $_SESSION['_sheep_firewall']){
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-slide/index&erro=true&token={$_SESSION['timeWT']}");
        exit();
    }
    
    $salvar = new Slide();
    $salvar->atualizaSlide($atualizar['id'], $atualizar);
    if($salvar->getResultado()){
        $_SESSION['_sheep_firewall'] = hash('sha512', random_int(100, 5000)); 
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-slide/index&sucesso=true&token={$_SESSION['timeWT']}");
    }else{
        header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-slide/index&erro=true&token={$_SESSION['timeWT']}");

    }

}

=======
>>>>>>> d5e2566c4ca863caefac3628a21b82f6c7d5381e

?>

</div>