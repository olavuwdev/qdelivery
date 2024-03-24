<?php
require('../sheep_core/config.php');
require_once('sheep_top_login.php');

?>

<body>

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">

              <div class="card-header">
                <center>
                  <img src="<?= SHEEP_LOGO ?>" alt="<?= SHEEP_TITULO_PAINEL ?>" class="img-fluid">
                </center>

              </div>


              <!-- INICIO CAMPOS VAZIOS SITE-->

              <?php
              $camposVazios = filter_input(INPUT_GET, 'campos_vazios', FILTER_VALIDATE_BOOLEAN);
              if ($camposVazios) {


              ?>

                <div class="alert alert-warning alert-has-icon" style="margin:3px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Prezado Cliente</div>
                    Por gentileza, preencha todos os campos!
                  </div>
                </div>
              <?php } ?>

              <!-- FIM CAMPOS VAZIOS SITE-->


              <!-- INICIO SENHA ERRADA SITE-->

              <?php
              $senhaErrada = filter_input(INPUT_GET, 'senha_errada', FILTER_VALIDATE_BOOLEAN);
              if ($senhaErrada) {


              ?>

                <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Olá Cliente!</div>
                    A senha, ou, e-mail não existe no sistema!
                  </div>
                </div>
              <?php } ?>
              <!-- FIM SENHA ERRADA SITE-->
              <!-- INICIO RESTRITO ADM SITE-->

              <?php
              $restritoAdm = filter_input(INPUT_GET, 'restrito_adm', FILTER_VALIDATE_BOOLEAN);
              if ($restritoAdm) {


              ?>

                <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Olá Cliente!</div>
                    Atenção! Área restrita aos administrador do sistema
                  </div>
                </div>
              <?php } ?>

              <!-- FIM RESTRITO ADM SITE-->
              
              <!-- INICIO MENSAGEM SAIR DO SISTEMA SITE-->

              <?php
              $saiu = filter_input(INPUT_GET, 'saiu', FILTER_VALIDATE_BOOLEAN);
              if ($saiu) {


              ?>
              
              <div class="alert alert-success alert-has-icon" style="margin:3px auto;">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                  <div class="alert-title">Prezado Cliente</div>
                  Você saiu do sistema, Volte sempre :)!
                </div>
              </div>
              <?php } ?>
              
              <!-- FIM MENSAGEM SAIR DO SISTEMA SITE-->

              <!-- 

                  <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                      <div class="alert-title">Olá Cliente!</div>
                      Atenção! Você foi bloqueado, por favor entre em contato com o administrador do sistema <?= EMAIL ?>
                    </div>
                  </div>

         



           

                <div class="alert alert-success alert-has-icon" style="margin:4px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Prezado Cliente</div>
                    Senha modificada com sucesso! Tente logar no mínimo 3x para validar a sua senha :)
                  </div>
                </div>

         

                <div class="alert alert-success alert-has-icon" style="margin:4px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Prezado Cliente</div>
                    Foi enviado para o seu e-mail o link para a recuperação da senha, verifique a sua caixa de entrada, caso não esteja lá, verifique a lixeira, ou, o spam :)!
                  </div>
                </div>

             
                <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Olá Cliente!</div>
                    A senha, ou, e-mail não existe no sistema!
                  </div>
                </div>

             

             
                <div class="alert alert-success alert-has-icon" style="margin:3px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Prezado Cliente</div>
                    Você saiu do sistema, Volte sempre :)!
                  </div>
                </div>

             

                <div class="alert alert-warning alert-has-icon" style="margin:3px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Prezado Cliente</div>
                    Por gentileza, preencha todos os campos!
                  </div>
                </div>

              
                <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Prezado Cliente</div>
                    Sua conta foi cancelada, por gentileza entrar em contato com o suporte!
                  </div>
                </div>

          -->
              <div class="card-body">

                <form method="post" action="sheep-filtros/entrar.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="Digite seu e-mail" required autofocus>
                    <div class="invalid-feedback">
                      Seu e-mail
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Senha</label>

                    </div>
                    <input id="password" type="password" class="form-control" name="senha" placeholder="Digite sua senha" tabindex="2" required>
                    <div class="invalid-feedback">
                      Qual é sua Senha?
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Entrar
                    </button>
                  </div>
                </form>


                <?php require_once('sheep_rodape_login.php'); ?>
                <!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->