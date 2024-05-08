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
                    
                               
?>
<tr>
<td>7</td>
<td>
<a href="#" data-toggle="modal" data-target="#ver">
<img src="assets/img/sem-imagem.png" alt="" width="35">                    
</a>
</td>
<td>77/77/7777</td>
<td> Titulo </td>
<td><b>R$ 77</b></td>
<td><a href="" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
<td>
<form action="<?= URL_CAMINHO_PAINEL . FILTROS . 'sheep-produtos/filtros/excluir&token=' . $_SESSION['timeWT']?>" method="post">
<!--<input type="hidden" name="sheep-firewall" value="<?= $_SESSION['_sheep_firewall'] ?>">-->
<input type="hidden" name="id" value="">
<button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
</form>
</td>
</tr>
<?php

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

?>
<!-- INICIO MODAL SUPORTE MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<!-- basic modal -->
<div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Titulo </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>
<img alt="" src="assets/img/sem-imagem.png" style="width:100%;">
</p>
<p>Criado(a): Data</p>
<p>Titulo: Titulo</p>
<p>Valor: R$ 77</p>
              
</div>
<div class="modal-footer bg-whitesmoke br">
<button type="button" class="btn btn-danger" data-dismiss="modal">x</button>
</div>
</div>
</div>
</div>

<!-- FIM MODAL SUPORTE MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
  <?php
  $sheep = null;
  $ler = null;
  ?>
</div>