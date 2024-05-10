<div class="main-content">

<!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL ?>sheep.php">Inicio</a></li>
<li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-produtos/criar&token=<?= $_SESSION['timeWT'] ?> ">Novo</a></li>
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
<h4>Produtos Ativos</h4>
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
<th>Valor</th>
<th>Editar</th>
<th>Excluir</th>
</tr>
</thead>
<tbody>
<?php
    $sheep->Leitura('produto', "WHERE tipo = 'produto' ORDER BY data DESC");
    $produtoPainel = Formata::Resultado($sheep);
    if($produtoPainel){
      foreach($sheep->getResultado() as $produto){
        $produto = (object) $produto;                
?>
<tr>
<td><?=$produto->id?></td>
<td>
  <a href="#" data-toggle="modal" data-target="#ver<?= $produto->id ?>">
  <?php if($produto->capa){?>
    <img src="<?= IMG_PRODUTOS . $produto->capa ?>" alt="<?= $produto->titulo?>" width="35">                    
    <?php }else{ ?>
      <img src="assets/img/sem-imagem.png" alt="<?= $produto->titulo?>" width="35">                    
<?php }?>
</a>
</td>
<td><?= date('d/m/Y', strtotime($produto->data))?></td>
<td> <?= $produto->titulo?> </td>
<td><b>R$ <?= $produto->valor_promocao ? $produto->valor_promocao : $produto->valor?></b></td>
<td><a href="<?= URL_CAMINHO_PAINEL . FILTROS . "sheep-produtos/atualizar&editar={$produto->id}&token=" . $_SESSION['timeWT']?>" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
<td>
<form action="<?= URL_CAMINHO_PAINEL . FILTROS . 'sheep-produtos/filtros/excluir&token=' . $_SESSION['timeWT']?>" method="post">
<!-- <input type="hidden" name="sheep-firewall" value="<?= $_SESSION['_sheep_firewall'] ?>">-->
<input type="hidden" name="id" value="<?= $produto->id?>">
<button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
</form>
</td>
</tr>
<?php
    }}
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
<?php
$sheep->Leitura('produto', "WHERE tipo = 'produto' ORDER BY data DESC");                    
$produtosPainel = Formata::Resultado($sheep);  
if($produtosPainel){
foreach($sheep->getResultado() as $produto){
$produto = (object) $produto;
?>
<!-- INICIO MODAL SUPORTE MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<!-- basic modal -->
<div class="modal fade" id="ver<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"><?= $produto->titulo ?> </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>
<?php if($produto->capa){?>
  <img src="<?= IMG_PRODUTOS . $produto->capa ?>" alt="<?= $produto->titulo ?>" style="width:100%;">   
<?php }else{?>
  <img src="assets/img/sem-imagem.png" alt="<?= $produto->titulo ?>" style="width:100%;">   
<?php }?>
</p>
<p>Criado(a): <?= date('d/m/Y',strtotime($produto->data)) ?></p>
<p>Titulo: <?= $produto->titulo ?></p>
<p>Valor: R$ <?= $produto->valor_promocao ? $produto->valor_promocao : $produto->valor ?></p>
              
</div>
<div class="modal-footer bg-whitesmoke br">
<button type="button" class="btn btn-danger" data-dismiss="modal">x</button>
</div>
</div>
</div>
</div>
<?php 
} } 
?>
<!-- FIM MODAL SUPORTE MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
  <?php
  $sheep = null;
  $ler = null;
  ?>
</div>