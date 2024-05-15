<?php
$sheep->Leitura('produto', "WHERE  tipo = 'produto'");
$contaProdutoTopo = Formata::Resultado($sheep);
if($contaProdutoTopo){
  $contaProduto = $sheep->getContaLinhas();
}else{
  $contaProduto = 0; 
}

?>

<div class="row">
  <div class="col-12">
    <div class="card mb-0">
      <div class="card-body">
        <ul class="nav nav-pills" style="margin:5px; float:right;">
          <li class="nav-item">
            <a class="nav-link active" href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-produtos/criar&token=<?= $_SESSION['timeWT'] ?> ">Novo </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-produtos/imprimir&token=<?= $_SESSION['timeWT'] ?> " style="margin-left:5px;"><span class="badge badge-primary"><i class="fas fa-print"></i> </span></a>
          </li>

        </ul>
        <ul class="nav nav-pills">

          <li class="nav-item">
            <a class="nav-link active" href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-produtos/index&token=<?= $_SESSION['timeWT'] ?>">Todos <span class="badge badge-white"><?= $contaProduto ?></span></a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="">Ajuda? <span class="badge badge-primary"><i class="fa fa-exclamation-circle"></i> </span></a>
          </li>


        </ul>
      </div>
    </div>
  </div>
</div>
<br>