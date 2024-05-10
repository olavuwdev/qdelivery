
<!-- INICIO CABEÇALHO DO SITE -->

<header class="topo-site">

    <!-- INICIO LOGO DO SITE-->
    <a href="index.php" class="logo">
    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64.3 61" viewBox="0 0 64.3 61" id="motorcycle" width="30" height="30">
    <path fill="#090402" d="M64.3,45.9V48c0,2.2-1.8,4-4,4c0,5-4,9-9,9s-9-4-9-9h-20c0,5-4,9-9,9s-9-4-9-9H4c-2.6,0-4.6-2.5-3.9-5.1
    l3.7-13.5c0.2-0.9,1-1.5,1.9-1.5h18.6c2.2,0,4,1.8,4,4s1.8,4,4,4h3h0.8c2.5,0,4.3-2.2,4-4.6l-3-19.7c-0.2-1-1-1.7-2-1.7h-2.8
    c-2.2,0-4-1.8-4-4V9.8c0-2.2,1.8-4,4-4h12.8c0.8,0,1.6-0.2,2.3-0.7l6.4-4.4c2.1-1.4,5-0.6,6,1.8l0.8,2c1.2,2.8,1.2,6,0.1,8.8
    L60,15.2c-0.9,2.2-3.5,3.2-5.6,2.1L47.6,14c-0.9-0.5-1.9,0.6-1.3,1.5l14.5,19.8C63.1,38.3,64.3,42.1,64.3,45.9z M6.3,26h18
    c2.2,0,4-1.8,4-4s-1.8-4-4-4h-18c-2.2,0-4,1.8-4,4S4.1,26,6.3,26z"></path>
</svg>
        Quentinha Delivery
    </a>
    <!-- FIM CABEÇALHO DO SITE-->

    <!-- INICIO MENU DO SITE-->
    <nav class="menu-site">
        <a href="index.">Inicio</a>
        <a href="empresa">Empresa</a>
        <a href="menu">Cardapio</a>
        <a href="loja">Montar pedido</a>
        <a href="blog">Blog</a>
        <a href="contatos">Fale conosco</a>
    </nav>

    <!-- FIM MENU DO SITE-->

    <!-- INICIO ICONES SITE-->
    <div class="icons">
        <div id="cart"class="fa fa-shopping-cart"></div>
        <div id="login" class="fa fa-users"></div>
        <div id="menu" class="fa fa-bars"></div>

    </div>
    
    <!-- FIM ICONES SITE-->

    <!-- INICIO ITEM CARRINHO DE COMPRAS TOPO DO SITE-->
    <div class="carrinho">
        <div class="box">
            <i class="fa fa-times"></i>
            <img src="<?= CAMINHO_TEMAS?>/assets/img/quentinha2.png"  width="100" height="70" alt="">
            <div class="content">
                <h3>Marmita Tradicional</h3>
                <span class="quantidade">1</span>
                <span class="multiplica">x</span>
                <span class="valor">R$ 12,00</span>
            </div>
        </div>
        <!-- FIM  ITEM CARRINHO DE COMPRAS TOPO DO SITE-->
    
        <!-- INICIO ITEM CARRINHO DE COMPRAS TOPO DO SITE-->

        <div class="box">
            <img src="<?= CAMINHO_TEMAS?>/assets/img/quentinha2.png"  width="100" height="70" alt="">
            <div class="content">
                <i class="fa fa-times"></i>
                <h3>Marmita Media</h3>
                <span class="quantidade">1</span>
                <span class="multiplica">x</span>
                <span class="valor">R$ 12,00</span>
            </div>
        </div>

        <!-- FIM  ITEM CARRINHO DE COMPRAS TOPO DO SITE-->

        <!-- INICIO ITEM CARRINHO DE COMPRAS TOPO DO SITE-->

        <div class="box">
            <i class="fa fa-times"></i>
            <img src="<?= CAMINHO_TEMAS?>/assets/img/quentinha2.png" width="100" height="70" alt="">
            <div class="content">
                <h3>Marmita Fitness</h3>
                <span class="quantidade">1</span>
                <span class="multiplica">x</span>
                <span class="valor">R$ 12,00</span>
            </div>
        </div>
        <h3 class="total"> Total: 36,00 </h3>
        <a href="" class="btn">Ir para carrinho </a>
    </div>
    <!-- FIM  ITEM CARRINHO DE COMPRAS TOPO DO SITE-->
    
    
    <!-- INICIO LOGIN TOPO DO SITE-->
        <form method="post" action="sheep_painel/sheep-filtros/entrar.php" novalidate="" class="login-form">
            <h3>Acesso a conta</h3>
            <input type="email" name="email" placeholder="Seu E-email" class="box">
            <input type="password" name="senha" placeholder="Sua senha" class="box">
            <div class="lembrar-senha">
                <input type="checkbox" name="lembrar" id="relembrar">
                <label for="relembrar"> Me lembrar da senha</label>
            </div>
            <button type="submit" name="sendLogin" class="btn">Acessar</button>
        </form>


    <!-- FIM LOGIN TOPO DO SITE-->

</header>

<!-- FIM CABEÇALHO DO SITE -->