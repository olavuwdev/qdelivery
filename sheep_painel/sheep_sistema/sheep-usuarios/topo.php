<?php

//Puxando do banco o numero de usuarios ativos
$sheep->Leitura('usuarios', "WHERE status = 'S'");
$clientes = Formata::Resultado($sheep);
if($clientes){
  $contaAtivo = $sheep->getContaLinhas();
}else{
  $contaAtivo = 0; 
}

//Puxando do banco o numero de todos usuarios

$sheep->Leitura('usuarios');
$clientes = Formata::Resultado($sheep);
if($clientes){
  $contaTodos = $sheep->getContaLinhas();
}else{
  $contaTodos = 0; 
}

//Puxando do banco o numero de usuarios canceladas

$sheep->Leitura('usuarios', "WHERE status != 'S'");
$clientes = Formata::Resultado($sheep);
if($clientes){
  $contaCancelados = $sheep->getContaLinhas();
}else{
  $contaCancelados = 0; 
}

?>

<div class="row">
  <div class="col-12">
    <div class="card mb-0">
      <div class="card-body">
        <ul class="nav nav-pills" style="margin:5px; float:right;">
          <li class="nav-item">
            <a class="nav-link active" href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-usuarios/criar&token=<?= $_SESSION['timeWT']?>">Novo </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="" style="margin-left:5px;"><span class="badge badge-primary"><i class="fas fa-print"></i> </span></a>
          </li>

        </ul>
        <ul class="nav nav-pills">

          <li class="nav-item">
            <a class="nav-link active" href="">Todos <span class="badge badge-white"><?= $contaTodos ?></span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">Ativos <span class="badge badge-primary"><?= $contaAtivo ?></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Cancelados <span class="badge badge-primary"><?=$contaCancelados?></span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="">Ajuda? <span class="badge badge-primary"><i class="fa fa-exclamation-circle"></i> </span></a>
          </li>


        </ul>
      </div>
    </div>
  </div>
</div>