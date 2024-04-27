<div class="main-content">


  <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL ?>sheep.php">Inicio</a></li>
      <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-comoFunciona/criar&token=<?= $_SESSION['timeWT'] ?> ">Novo</a></li>
      <li class="breadcrumb-item active" aria-current="page">Listar</li>
    </ol>
  </nav>
  <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

  <section class="section">
    <div class="section-body">
      <!--INICIO LINKS TOPO clientesPR.COM.BR MAYKON SILVEIRA--->
      <?php include_once 'topo.php'; ?>
      <!--FIM LINKS TOPO clientesPR.COM.BR MAYKON SILVEIRA--->

   
     <!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
     <?php include_once('./token.php'); ?>
     <!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->


      <!-- INICIO TABELA  MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Como funciona</h4>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Foto</th>
                      <th>Criado</th>
                      <th>Titulo</th>
                      <th>Ordem</th>
                      <th>Editar</th>
                      <th>Excluir</th>

                    </tr>
                  </thead>
                  <tbody>

                      <?php 
                      //FOREACH para a leitura dos banners
                          $sheep->Leitura('banners', "WHERE tipo = 'comoFunciona' ORDER BY data DESC");
                          $bannersDestaque = Formata::Resultado($sheep);
                          if($bannersDestaque){
                            foreach($sheep->getResultado() as $banner){
                              $banner = (object) $banner;
                              
                      ?>

                    <?php
                    ?>
                        <tr>
                          <td><?=$banner->id?></td>
                          <td>
                              <?php if($banner->capa){ ?>
                               <img alt="<?=$banner->titulo?>" src="<?= SHEEP_IMG_BANNERS . $banner->capa ?>" width="35">
                               <?php }else{ ?>
                                <img alt="" src="assets/img/sem-imagem.png" width="35">
                                <?php } ?> 
                             
                          </td>
                          <td><?= date('d/m/Y', strtotime($banner->data)) ?></td>
                          <td><?= $banner->titulo?></td>
                          <td><?= $banner->link?></td>
                          <td><a href="<?= URL_CAMINHO_PAINEL . FILTROS . "sheep-comoFunciona/atualizar&editar={$banner->id}&token={$_SESSION['timeWT']}" ?>" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                          <td>
                            <form action="<?= URL_CAMINHO_PAINEL . FILTROS . 'sheep-comoFunciona/filtros/excluir&token=' . $_SESSION['timeWT']?>" method="post">
                              <input type="hidden" name="id" value="<?= $banner->id?>">
                              <button type="submit" class="btn btn-icon btn-danger" onclick="return confirm('Realmente deseja excluir o banner?')" ><i class="fas fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>

                    <?php }} ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  

        <!-- INICIO DA JANELA DE MODAL DE TREINAMENTO MAYKONSILVEIRA.COM.BR -->
    <!-- Large modal -->
    <div class="modal fade ajuda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Avisos importantes:    </h5>
                <h5 style="text-align:center">Não é possivel cadastrar um item com a mesma Ordem </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            </div>
          </div>
        </div>

  <!-- FIM DA JANELA DE MODAL DE TREINAMENTO MAYKONSILVEIRA.COM.BR -->
</div>

<?php 

?>