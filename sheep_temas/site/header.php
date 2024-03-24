
<!-- INICIO CABEÇALHO DO SITE -->

<header class="topo-site">

    <!-- INICIO LOGO DO SITE-->
    <a href="index.php" class="logo">
        <i class="fa fa-utensils"></i>
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
        <form action="" class="login-form">
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