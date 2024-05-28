<div class="main-content">
    <!--INICIO TOKEN E RETORNOS TOPO clientes SITE--->
    <?php include_once 'token.php'; ?>
    <!--FIM TOKEN E RETORNOS TOPO clientes SITE--->
      
    <?php 
        //PROTEÇÃO DO FILTRO DE FORMULARIO POR SESSÃO DE LOGIN INICIADA
        require_once('sheep-filtros/valida.php');


        $atualizar = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($atualizar['sendSheep'])){
            var_dump($atualizar);
            unset($atualizar['sendSheep']);

            $atualizar['logo'] = $_FILES['logo']['tmp_name'] ? $_FILES['logo'] : null;
            $atualizar['icone'] = $_FILES['icone']['tmp_name'] ? $_FILES['icone'] : null;

            if($atualizar['sheep_firewall'] != $_SESSION['_sheep_firewall']){
                header("Location:" . URL_CAMINHO_PAINEL . FILTROS . "sheep-dados/index&erro=true&token={$_SESSION['timeWT']}");
                exit();
            }


            //Criando instancia da classe dados

            $salvar = new Dados();
            $salvar->atualizarDados($atualizar['id'], $atualizar);
            if($salvar->getResultado()){
                $_SESSION['_sheep_firewall'] = hash('sha512', random_int(100, 5000));
                header("Location:" . URL_CAMINHO_PAINEL . FILTROS . "sheep-dados/index&sucesso=true&token={$_SESSION['timeWT']}");
            }else{
                header("Location:" . URL_CAMINHO_PAINEL . FILTROS . "sheep-dados/index&erro=true&token={$_SESSION['timeWT']}");
            }
        }
?>
</div>