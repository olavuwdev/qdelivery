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
 <h4>Ativos</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-hover" id="tableExport" style="width:100%;">
<thead>
<tr>
<th>Nº</th>
<th>Criado</th>
<th>Titulo</th>
<th>Valor</th>
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
<td><?= $produto->id?></td>
<td><?= date('d/m/Y', strtotime($produto->data)) ?></td>
<td><?= $produto->titulo ?></td>
<td><?=$produto->valor_promocao ? $produto->valor_promocao : $produto->valor ?></td>
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

</div>