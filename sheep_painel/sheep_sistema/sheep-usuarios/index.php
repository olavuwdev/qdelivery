<div class="main-content">


  <!-- INICIO NAVEGAÇÃO SITE--->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="sheep.php">Inicio</a></li>
      <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-usuarios/criar&token=<?= $_SESSION['timeWT'];?>">Novo</a></li>
      <li class="breadcrumb-item active" aria-current="page">Listar</li>
    </ol>
  </nav>
  <!-- FIM NAVEGAÇÃO SITE--->

  <section class="section">
    <div class="section-body">
      <!--INICIO LINKS TOPO clientes SITE--->
      <?php include_once 'topo.php'; ?>
      <!--FIM LINKS TOPO clientes SITE--->
      <br>
      
      <!--INICIO TOKEN E RETORNOS TOPO clientes SITE--->
      <?php include_once 'token.php'; ?>
      <!--FIM TOKEN E RETORNOS TOPO clientes SITE--->
      


      <!-- INICIO TABELA  SITE -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Ativos</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Foto</th>
                      <th>Criado</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>Função</th>
                      <th>Status</th>
                      <th>Editar</th>
                      <th>Excluir</th>

                    </tr>
                  </thead>
                  <tbody>


                  
                        <?php
                          $sheep->Leitura('usuarios', "ORDER BY data DESC");
                          $usuarios = Formata::Resultado($sheep);
                          if($usuarios){
                            foreach($sheep->getResultado() as $cliente){
                              $cliente = (object) $cliente;
                            
                          

                        ?>
                        <tr>
                          <td><?=$cliente->id?></td>
                          <td>
                            <a href="#" data-toggle="modal" data-target="#ver<?=$cliente->id?>">
                              <?php if($cliente->foto){?>
                                <img alt="" src="<?= SHEEP_IMG_USUARIOS . $cliente->foto?>" width="35">
                              <?php }else{?>
                                <img alt="" src="assets/img/sem-imagem.png" width="35">
                              <?php }?>
                            </a>

                          </td>
                          <td><?= date('d/m/Y', strtotime($cliente->data))?></td>
                          <td><?=$cliente->nome ? $cliente->nome : null; ?> <?=$cliente->sobrenome ? $cliente->sobrenome : null; ?></td>
                          <td><?= $cliente->cpf ? $cliente->cpf: null?></td>

                          <td> <?php
                            if($cliente->nivel == 'M'){
                              echo "Administrador";
                            }else{
                              echo "Cliente";
                            }
                          ?>  
                          </td>
                          <td>
                            <?php if($cliente->status == "S"){ ?>
                            <button class="btn btn-icon btn-success"><i class="fas fa-check-square"></i></button>
                            <?php }else{ ?>
                              <button class="btn btn-icon btn-danger"><i class="fas">X</i></button>

                            <?php }?>
                          </td>

                          <td><a href="<?= URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/atualizar&editar={$cliente->id}&token=" .$_SESSION['timeWT'] ?>" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                          <td>
                            <form action="<?= URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/filtros/excluir&token=" .$_SESSION['timeWT'] ?>" method="post">

                              <input type="hidden" name="lixeira" value="<?=$cliente->id?>">
                              <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        <?php 
                            } 
                          }
                          ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
 
      <!-- INICIO MODAL SUPORTE SITE--->
          
    <?php
        $ler = new Ler();
        $ler->Leitura('usuarios', "ORDER BY data DESC");
        if($ler->getResultado()){
          foreach($ler->getResultado() as $cliente){
            $cliente = (object) $cliente;
          
      ?>
                    

      <!-- basic modal -->
      <div class="modal fade" id="ver<?=$cliente->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?=$cliente->nome ? $cliente->nome : null; ?> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <p>
              <?php if($cliente->foto){?>
                  <img alt="" src="<?= SHEEP_IMG_USUARIOS . $cliente->foto?>"  style="width:150px; height:auto; object-fit:cover;">
                <?php }else{?>
                  <img alt="" src="assets/img/sem-imagem.png" style="width:150px; height:auto; object-fit:cover;">
                <?php }?>
                  

              </p>
              <p>Criado(a): <?= date('d/m/Y', strtotime($cliente->data))?></p>
              <p>Nome: <?=$cliente->nome ? $cliente->nome : null; ?> <?=$cliente->sobrenome ? $cliente->sobrenome : null; ?></p>
              <p>CPF: <?= $cliente->cpf ? $cliente->cpf : null ;?></p>
              <p>Whats: <?= $cliente->whatsapp ? $cliente->whatsapp : null ?></p>
              <p>E-mail:  <?= $cliente->email ? $cliente->email : null ?></p>
              <p>Função:  <?php echo $cliente->nivel == 'M' ? 'Administrador' : 'Cliente' ; ?> </p>

            </div>
            <div class="modal-footer bg-whitesmoke br">

              <button type="button" class="btn btn-danger" data-dismiss="modal">x</button>
            </div>
          </div>
        </div>
      </div>
    <?php }} ?>
      <!-- FIM MODAL SUPORTE SITE--->
  




</div>

<?php
$sheep = null;
$ler = null;

?>