
 
<?php
require_once('header.php');
$sheep->Leitura('dados', "WHERE tipo = 'config' ORDER BY ultima_atualizacao DESC");
$empresa = $sheep->getResultado() ? (object) $sheep->getResultado()[0] : null;
function formataNumero($phoneNumber) {
    // Remove tudo que não é dígito
    return preg_replace('/\D/', '', $phoneNumber);
}
?>


<!-- INICIO SLIDE DESTAQUE SITE-->

<section class="qd_destaque">
    <!-- Slider main container -->
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <!-- INICIO ITEM SLIDE HOME DO SITE -->
            <div class="swiper-slide slide" style="background: url(<?= CAMINHO_TEMAS?>/assets/img/slides/slide1.png) no-repeat;">
                <div class="content">
                
                 
                <?php
                /* function sanitizePhoneNumber($phoneNumber) {
                    // Remove tudo que não é dígito
                    return preg_replace('/\D/', '', $phoneNumber);
                }

                $sheep->Leitura('dados', "WHERE tipo = 'config' ORDER BY ultima_atualizacao DESC");
                $sheepEmpresa = Formata::Resultado($sheep);
                if($sheepEmpresa){
                    foreach($sheep->getResultado() as $empresa){
                    $empresa  = (object) $empresa;
                    break;
                    }

                */
                ?>
                    <h3> A <span>melhor</span> quentinha <br> da cidade</h3>
                    <a href="//api.whatsapp.com/send/?phone=55<?= formataNumero($empresa->whatsapp)?>&text=Olá gostaria+de+fazer+um+pedido%21&type=phone_number&app_absent=0" class="btn">Comprar agora </a>
                </div>
            </div>  
            
            <!-- FIM ITEM SLIDE HOME DO SITE -->
            
            <!-- INICIO ITEM 2 SLIDE HOME DO SITE -->
            <div class="swiper-slide slide" style="background: url(<?= CAMINHO_TEMAS?>/assets/img/slides/slide2.png) no-repeat;">
                <div class="content">
                    <h3> A <span>melhor</span> quentinha <br> da cidade</h3>
                    <a href="//api.whatsapp.com/send/?phone=55<?= formataNumero($empresa->whatsapp)?>&text=Olá gostaria+de+fazer+um+pedido%21&type=phone_number&app_absent=0" class="btn">Comprar agora </a>
                </div>
            </div>  
            
            <!-- FIM ITEM 2 SLIDE HOME DO SITE -->
        </div>
        
        
        <!-- INICIO BOTOES SLIDE HOME DO SITE -->
        
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        
        
        <!-- FIM BOTOES SLIDE HOME DO SITE -->
    </div>
</section>


<!-- FIM SLIDE DESTAQUE SITE-->

<!-- INICIO DESTAQUE DO SITE-->

<section class="destaque">
    <div class="box-container">
        <!-- INICIO ITEM DESTAQUE DO SITE-->
        <div class="box">
            <div class="qdimg">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/destaques/1.png" alt="">
            </div>
            <div class="content">
                <h3>Marmitas diversas</h3>
            </div>
        </div>
        <!-- FIM ITEM DESTAQUE DO SITE-->

        <!-- INICIO ITEM DESTAQUE DO SITE-->
        <div class="box">
            <div class="qdimg">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/destaques/2.png" alt="">
            </div>
            <div class="content">
                <h3>Comida caseira</h3>
            </div>
        </div>
        <!-- FIM ITEM DESTAQUE DO SITE-->

        <!-- INICIO ITEM DESTAQUE DO SITE-->
        <div class="box">
            <div class="qdimg">
                <img src="<?= CAMINHO_TEMAS?>/assets/img/destaques/3.png" alt="">
            </div>
            <div class="content">
                <h3>Diversas protéinas</h3>
            </div>
        </div>
        <!-- FIM ITEM DESTAQUE DO SITE-->
    </div>
</section>

<!-- FIM DESTAQUE DO SITE-->

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

<!-- INICIO LOJA VIRTUAL SITE -->

<section class="loja">

    <h1 class="titulo"> QUENTINHAS <span>DISPONIVEIS</span></h1>
    <div class="box-container">
        <!-- INICIO ITEM LOJA SITE -->
        
        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/quentinha2.png" width="190px" alt="">
            <h3>QUENTINHA G</h3>
            <p>Quentinha tamanho G</p>
            <div class="estrelas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="loja_valor">
                R$ 15,00 <span> R$ 20,00</span>
            </div>
            <a href="" class="btn">Adicionar ao carrinho</a>
        </div>
        
        <!-- FIM ITEM LOJA SITE -->        <!-- INICIO ITEM LOJA SITE -->
        
        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/quentinha2.png" width="190px" alt="">
            <h3>QUENTINHA M</h3>
            <p>Quentinha tamanho M</p>
            <div class="estrelas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="loja_valor">
                R$ 12,00 <span> R$ 15,00</span>
            </div>
            <a href="" class="btn">Adicionar ao carrinho</a>
        </div>
        
        <!-- FIM ITEM LOJA SITE -->        
        <!-- INICIO ITEM LOJA SITE -->
        
        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/quentinha2.png" width="190px" alt="">
            <h3>QUENTINHA P</h3>
            <p>Quentinha tamanho P</p>
            <div class="estrelas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="loja_valor">
                R$ 10,00 <span> R$ 12,00</span>
            </div>
            <a href="" class="btn">Adicionar ao carrinho</a>
        </div>
        
        <!-- FIM ITEM LOJA SITE -->
        
    </div>
    

</section>



<!-- FIM LOJA VIRTUAL SITE -->

<!-- INICIO SOBRE A EMPRESA SITE -->

<section class="empresa">
    <div class="row">
        <div class="empresa-img">
        <img src="<?= CAMINHO_TEMAS?>/assets/img/empresa_video.gif" alt="400x400" onerror="this.onerror=null; this.src='<?= CAMINHO_TEMAS?>/assets/img/fachadaMarmitaria.jpeg'">
        </div>
        <div class="content">
            <h3>Quentinha Delivery: Quentinha <span>rápida e barata</span>  </h3>
            <p>
                Empresa fundada com proposito de fornecer comida de qualidade e acessivel para a cidade de Mossoró/RN.
            </p>
            <p>
                Criada em 2023, a <span>Quentinha Delivery</span> até os dias de hoje entrega comida boa e acessivel para todos os clientes.
            </p>
            <a href="" class="btn">Saiba mais</a>
        </div>
    </div>
</section>


<!-- FIM SOBRE A EMPRESA SITE -->

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

<br>

<?php require_once('footer.php');