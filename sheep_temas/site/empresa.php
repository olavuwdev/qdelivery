<?php require_once('header.php'); 
?>
<!-- INICIO TOPO DA PAGINA DO SITE -->

<div class="topo-pagina">
    <h1>Sobre nós</h1>
    <p><a href="index.php" title="sobre nós">Inicio ></a> empresa </p>
</div>

<!-- FIM TOPO DA PAGINA DO SITE -->

<!-- INICIO COMO FUNCIONA O -->

<div class="como-funciona">
    <h1 class="titulo"> Como <span>Funciona</span></h1>
    <div class="box-container">
        <!-- INICIO ITEM COMO FUNCIONA O -->

        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/como-funciona/1.png"  alt="">
            <h3>Faça seu pedido</h3>
        </div>
        <!-- FIM ITEM COMO FUNCIONA O -->
        <!-- INICIO ITEM COMO FUNCIONA O -->

        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/como-funciona/2.png"  alt="">
            <h3>Entrega rápida</h3>
        </div>
        <!-- FIM ITEM COMO FUNCIONA O -->
        <!-- INICIO ITEM COMO FUNCIONA O -->

        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/como-funciona/3.png"  alt="">
            <h3>Pagamento fácil</h3>
        </div>
        <!-- FIM ITEM COMO FUNCIONA O -->
        <!-- INICIO ITEM COMO FUNCIONA O -->

        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/como-funciona/4.png"  alt="">
            <h3>Bom apetite</h3>
        </div>
        <!-- FIM ITEM COMO FUNCIONA O -->

    </div>
</div>

<!-- FIM COMO FUNCIONA O -->

<!-- TESTANDO FUNCIONALIDADE VIEW -->

<?php

$sheep->Leitura('dados', "WHERE tipo = 'config' ORDER BY ultima_atualizacao DESC");
$sheepEmpresa = Formata::Resultado($sheep);
if($sheepEmpresa){
    foreach($sheep->getResultado() as $empresa){
    $empresa  = (object) $empresa;
}

?>

<!-- INICIO SOBRE A EMPRESA SITE -->

<section class="empresa">
    <div class="row">
        <div class="empresa-img">
        <img src="<?= CAMINHO_TEMAS?>/assets/img/empresa_video.gif" alt="780x900" onerror="this.onerror=null; this.src='<?= CAMINHO_TEMAS?>/assets/img/fachadaMarmitaria.jpeg'">
        </div>
        <div class="content">
            <h3>Quentinha Delivery: Quentinha <span>rápida e barata</span>  </h3>
            <!--
            <p>
                Empresa fundada com proposito de fornecer comida de qualidade e barata para a cidade de Mossoró/RN.
            </p>
            <p>
                Criada em 2023, a <span>Quentinha Delivery</span> até os dias de hoje entrega comida boa e barata para todos os clientes.
            </p>
            -->
            <p><?= $empresa->descricao ?></p>
            <?php } ?>
            <a href="" class="btn">Saiba mais</a>
        </div>
    </div>
</section>
<!-- FIM SOBRE a EMPRESA SITE -->


<br>
<br>


<!-- INICIO GALERIA DE FOTOS SITE -->


<section class="galeria-fotos">
    <div class="galeria-container">

        <!-- INICIO ITEM GALERIA DE FOTOS SITE -->

            <a href="<?= CAMINHO_TEMAS?>/assets/img/galeria/marmita1.jpg" class="box">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/galeria/marmita1.jpg" alt="">
                
                <div class="icon">
                    <i class="fas fa-plus"></i>
                </div>

            </a>

        <!-- FIM ITEM GALERIA DE FOTOS SITE -->
        <!-- INICIO ITEM GALERIA DE FOTOS SITE -->

            <a href="<?= CAMINHO_TEMAS?>/assets/img/galeria/marmita2.jpg" class="box">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/galeria/marmita2.jpg" alt="">
                
                <div class="icon">
                    <i class="fas fa-plus"></i>
                </div>

            </a>

        <!-- FIM ITEM GALERIA DE FOTOS SITE -->
        <!-- INICIO ITEM GALERIA DE FOTOS SITE -->

            <a href="<?= CAMINHO_TEMAS?>/assets/img/galeria/marmita3.jpg" class="box">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/galeria/marmita3.jpg" alt="">
                
                <div class="icon">
                    <i class="fas fa-plus"></i>
                </div>

            </a>

        <!-- FIM ITEM GALERIA DE FOTOS SITE -->


    </div>
</section>

<!-- FIM GALERIA DE FOTOS SITE -->
<?php require_once('footer.php');