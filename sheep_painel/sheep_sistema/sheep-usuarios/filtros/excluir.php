<div class="main-content">
    <!--INICIO TOKEN E RETORNOS TOPO clientes SITE--->
    <?php include_once 'token.php'; ?>
    <!--FIM TOKEN E RETORNOS TOPO clientes SITE--->
      
    <?php 
        //PROTEÇÃO DO FILTRO DE FORMULARIO POR SESSÃO DE LOGIN INICIADA
        require_once('sheep-filtros/valida.php');

        $excluir = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        if(isset($excluir)){
            $salvar = new Usuarios();
            $salvar->excluirUsuario($excluir);
            if($salvar->getResultado()){
                header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&delete=true&token={$_SESSION['timeWT']}");
            }else{
                header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&erro=true&token={$_SESSION['timeWT']}");
            }
        }


    ?>


</div>