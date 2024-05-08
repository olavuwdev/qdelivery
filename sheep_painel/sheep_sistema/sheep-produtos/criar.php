<?php

?>

<!-- Main Content -->
<div class="main-content">

  <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL ?>sheep.php">Inicio</a></li>
      <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-produtos/index&token=<?= $_SESSION['timeWT'] ?>">Listagem</a></li>

      <li class="breadcrumb-item active" aria-current="page">Criar</li>
    </ol>
  </nav>
<!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<section class="section">

<!-- INICIO TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<?php include_once('./token.php'); ?>
<!-- FIM TOKEN URL MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<form action="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-produtos/filtros/criar&token=<?= $_SESSION['timeWT'] ?>" method="post" enctype="multipart/form-data">

<div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <div class="card-footer text-right">
                <a href="" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i> Ajuda? </a>
              </div>

              <div class="card-header">
                <h4>Criar</h4>
              </div>
              <div class="card-body">
                
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Capa(1200X1200px)</label>
                  <div class="col-sm-12 col-md-7">
                    <div id="image-preview" class="image-preview">
                      <label for="image-upload" id="image-label">Buscar Imagem</label>

                      <input type="file" name="capa" id="image-upload" />
                    </div>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Título do Produto(Obrigatório)</label>

                  <div class="col-md-7">
                    <input type="text" class="form-control" name="titulo" placeholder="Digite o nome do produto" required >
                  </div>
                </div>

               
              
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Valor(Obrigatório)</label>
                  <div class="col-md-7">
                      <input type="number" class="form-control" name="valor" placeholder="Digite o valor" step="0.01" required>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Valor Promocional(Obrigatório)</label>

                  <div class="col-md-7">
                    <input type="number" class="form-control" name="valor_promocao" placeholder="Digite o valor promocinal" step="0.01" required>
                  </div>
                 
                </div> 
                
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Resumo 7 palavras(Obrigatório)</label>

                  <div class="col-md-7">
                    <input type="text" class="form-control" name="resumo" placeholder="Digite o resumo no máximo 7 palavras" >
                  </div>
                 
                </div>


                <input type="hidden" name="usuario" value="<?= $_SESSION['sheep_user']['id'] ?>">
                <input type="hidden" name="sheep_firewall" value="<?= $_SESSION['_sheep_firewall'] ?>">
                <input type="hidden" name="tipo" value="produto">
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



  
</div>

<?php
$sheep = null;
?>