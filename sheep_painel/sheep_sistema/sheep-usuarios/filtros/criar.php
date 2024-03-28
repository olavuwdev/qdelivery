<div class="main-content">
    <!--INICIO TOKEN E RETORNOS TOPO clientes SITE--->
    <?php include_once './token.php'; ?>
    <!--FIM TOKEN E RETORNOS TOPO clientes SITE--->
      
    <?php 
        //PROTEÇÃO DO FILTRO DE FORMULARIO POR SESSÃO DE LOGIN INICIADA
        require_once('sheep-filtros/valida.php');

        $criar = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if(isset($criar['sendSheep'])){
            unset($criar['sendSheep']);
            
            $criar['foto'] = $_FILES['foto']['tmp_name'] ? $_FILES['foto'] : null;

            if($criar['sheep_firewall'] != $_SESSION['_sheep_firewall']){
                header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&erro=true&token=".$_SESSION['timeWT']);
                exit();
            }

            $salvar = new Usuarios();
            $salvar->inserirUsuario($criar);
            if($salvar->getResultado()){
                $_SESSION['_sheep_firewall'] = hash('sha512', random_int(100, 5000));
                header("Location: ". URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&sucesso=true&token=".$_SESSION['timeWT']);
            }else{
                header("Location: ". URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&erro=true&token=".$_SESSION['timeWT']);

            }
        }
        
    ?>


</div>