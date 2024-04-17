<?php
$editar = filter_input(INPUT_GET, 'editar', FILTER_VALIDATE_INT);
$sheep->Leitura('slide', "WHERE id = :id", "id={$editar}");
$slideDestaque = Formata::Resultado($sheep);
if($slideDestaque){
  foreach($sheep->getResultado() as $slide);
    $slide = (object) $slide;
}

?>
   
   
   
   <!-- Main Content -->
    <div class="main-content">
 
      <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL ?>sheep.php">Inicio</a></li>
          <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS?>sheep-slide/index&token=<?=$_SESSION['timeWT']?>">Listagem</a></li>
 
          <li class="breadcrumb-item active" aria-current="page">Atualizar</li>
        </ol>
      </nav>
      <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 
      <section class="section">
 
          <!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
          <?php include_once('./token.php'); ?>
     <!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

 
        <form action="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-slide/filtros/atualizar&token=<?= $_SESSION['timeWT'] ?>" method="post" enctype="multipart/form-data">
 
 
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">

                  <div class="card-footer text-right">
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target=".ajuda"><i class="fa fa-exclamation-circle"></i> Ajuda </a>
                  </div>
 
                  <div class="card-header">
                    <h4>Atualizar</h4>
                  </div>
                  <div class="card-body">

                 
 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Capa(1920X1000px)</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Buscar Imagem</label>
                          <?php
                            if($slide->capa){ ?>
                              <img src="<?= SHEEP_IMG_SLIDE . $slide->capa ?>" style="width:100%" alt="<?= $slide->titulo_um ? $slide->titulo_um : null; ?>">
                            <?php } ?>

                          ?>


                          <input type="file" name="capa" id="image-upload" />
                        </div>
                      </div>
                    </div>
 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título 1(Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="text" class="form-control" name="titulo_um" placeholder="Digite o título 1" value="<?= $slide->titulo_um ? $slide->titulo_um : null;?>">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título 2(Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="text" class="form-control" name="titulo_dois" placeholder="Digite o título 2" value="<?= $slide->titulo_dois ? $slide->titulo_dois : null;?>">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título 3(Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="text" class="form-control" name="titulo_tres" placeholder="Digite o título 3" value="<?= $slide->titulo_tres ? $slide->titulo_tres : null;?>">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título 4(Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="text" class="form-control" name="titulo_quatro" placeholder="Digite o título 4" value="<?= $slide->titulo_quatro ? $slide->titulo_quatro : null;?>">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cor 1(Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="color" class="form-control" name="cor_um" placeholder="Cor1" value="<?= $slide->cor_um ? $slide->cor_um : null;?>">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cor 2(Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="color" class="form-control" name="cor_dois" placeholder="Cor2" value="<?= $slide->cor_dois ? $slide->cor_dois : null;?>">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Texto botão (Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="text" class="form-control" name="text_btn" placeholder="Digite o texto" value="<?= $slide->text_btn ? $slide->text_btn : null;?>">
                      </div>
                    </div>
 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link(Opcional)</label>
                      
                      <div class="col-md-7">
                        <input type="url" class="form-control" name="link" placeholder="Cole o link URL completa" value="<?= $slide->link ? $slide->link : null;?>">
                      </div>
                    </div>

                    <input type="hidden" name="id" value="<?= $editar ?>">
                    <input type="hidden" name="sheep_firewall" value="<?= $_SESSION['_sheep_firewall'] ?>">">
                    <input type="hidden" name="tipo_cadastro" value="criar">
           
 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-lg btn-primary" name="sendSheep">Salvar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>
 
         <!-- INICIO DA JANELA DE MODAL DE TREINAMENTO MAYKONSILVEIRA.COM.BR -->
    <!-- Large modal -->
    <div class="modal fade ajuda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Fique tranquilo que vou te ajudar, veja o vídeo até o final 2x</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
             
               <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ffuF8-Nebuw?rel=0" allowfullscreen></iframe>
                 </div>
                 
                 
              </div>
            </div>
          </div>
        </div>

  <!-- FIM DA JANELA DE MODAL DE TREINAMENTO MAYKONSILVEIRA.COM.BR -->
 
    </div>