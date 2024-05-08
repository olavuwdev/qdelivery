<!-- INICIO TOKEN MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA---> 
<!-- Main Content -->
<div class="main-content" >          
             
<!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<?php include_once('./token.php'); ?>
<!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<?php
require_once('sheep-filtros/valida.php');

$criar = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

if(isset($criar['sendSheep'])){
    unset($criar['sendSheep']);


    if($criar['sheep_firewall'] != $_SESSION['_sheep_firewall']){
        header("Location:" . URL_CAMINHO_PAINEL . FILTROS . "sheep-produtos/index&erro=true&token={$_SESSION['timeWT']}");
        exit();
    }
    
    $salvar = new Produtos();
    $salvar->inserir($criar);
    if($salvar->getResultado()){
        $_SESSION['_sheep_firewall'] = hash('sha512',random_int(100,5000));
        header("Location:" . URL_CAMINHO_PAINEL . FILTROS . "sheep-produtos/index&erro=true&token={$_SESSION['timeWT']}");
    }else{
        header("Location:" . URL_CAMINHO_PAINEL . FILTROS . "sheep-produtos/index&erro=true&token={$_SESSION['timeWT']}");
    }
}

?>
</div>