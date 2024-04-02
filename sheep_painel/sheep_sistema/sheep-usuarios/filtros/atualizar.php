<div class="main-content">
    <!--INICIO TOKEN E RETORNOS TOPO clientes SITE--->
    <?php include_once 'token.php'; ?>
    <!--FIM TOKEN E RETORNOS TOPO clientes SITE--->
      
    <?php 
        //PROTEÇÃO DO FILTRO DE FORMULARIO POR SESSÃO DE LOGIN INICIADA
        require_once('sheep-filtros/valida.php');

        $atualizar = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
        if(isset($atualizar['sendSheep'])){
            unset($atualizar['sendSheep']);

            $atualizar['foto'] = $_FILES['foto']['tmp_name'] ? $_FILES['foto'] : null;

            if($atualizar['sheep_firewall'] != $_SESSION['_sheep_firewall']){
                header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&erro=true&token{$_SESSION['timeWT']}");
                exit();
            }

            unset($atualizar['sheep_firewall']);
                $salvar = new Usuarios();
                $salvar->atualizaUsuario($atualizar['id'], $atualizar);
                if($salvar->getResultado()){
                    $_SESSION['_sheep_firewall'] = hash('sha512', random_int(100, 5000));
                    header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&sucesso=true&token{$_SESSION['timeWT']}");
                }else{
                    header("Location: " . URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/index&erro=true&token{$_SESSION['timeWT']}");
                }
            }
        
    ?>


</div>