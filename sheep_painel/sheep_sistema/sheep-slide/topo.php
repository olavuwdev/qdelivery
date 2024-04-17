<?php

$sheep->Leitura('slide');
$slideCapa = Formata::Resultado($sheep);
if($slideCapa){
  $contSlide = $sheep->getContaLinhas();
}else{
  $contSlide = 0; 
}

?>

<div class="row">
  <div class="col-12">
    <div class="card mb-0">
      <div class="card-body">
        <ul class="nav nav-pills" style="margin:5px; float:right;">
          <li class="nav-item">
            <a class="nav-link active" href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-slide/criar&token=<?= $_SESSION['timeWT'] ?> ">Novo </a>
          </li>

         
        </ul>
        <ul class="nav nav-pills">

          <li class="nav-item">
            <a class="nav-link active" href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-slide/index&token=<?= $_SESSION['timeWT'] ?>">Todos <span class="badge badge-white"><?= $contSlide?></span></a>
          </li>

          

          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target=".ajuda">Ajuda? <span class="badge badge-primary"><i class="fa fa-exclamation-circle"></i> </span></a>
          </li>


        </ul>
      </div>
    </div>
  </div>
</div>
<br>