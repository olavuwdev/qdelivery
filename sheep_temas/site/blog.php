<?php require_once('header.php'); ?>

<!-- INICIO TOPO DA PAGINA DO SITE -->

<div class="topo-pagina">
    <h1>Nosso blog</h1>
    <p><a href="index.php" title="Montar pedido">Inicio ></a> Noticias </p>
</div>

<!-- FIM TOPO DA PAGINA DO SITE -->

<!-- INICIO BLOG SITE -->

<section class="blogs">
    <h1 class="titulo">Nosso <span>blog</span></h1>
    <div class="box-container">
        <!-- INICIO ITEM BLOG SITE -->
            <div class="box">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/blog/2.png" alt="">
                <div class="icons">
                    <a href="" title="">
                        <i class="fas fa-calendar"></i> 07 de março de 2024
                    </a>
                    <a href="" title="">
                        <i class="fas fa-user"></i> Olavo Adriel
                    </a>
                </div>
                <h1>Marmita e Quentinha Brasileira</h1>
                <p> Sabor e Praticidade na Medida Certa</p>
                <a href="" class="btn">Saiba mais</a>
            </div>
        
        <!-- FIM ITEM BLOG SITE -->

        <!-- INICIO ITEM BLOG SITE -->
            <div class="box">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/blog/2.png" alt="">
                <div class="icons">
                    <a href="" title="">
                        <i class="fas fa-calendar"></i> 07 de março de 2024
                    </a>
                    <a href="" title="">
                        <i class="fas fa-user"></i> Olavo Adriel
                    </a>
                </div>
                <h1>Marmita e Quentinha Brasileira</h1>
                <p> Sabor e Praticidade na Medida Certa</p>
                <a href="" class="btn">Saiba mais</a>
            </div>
        
        <!-- FIM ITEM BLOG SITE -->


    </div>
</section>

<!-- FIM BLOG SITE -->

<?php require_once('footer.php'); ?>