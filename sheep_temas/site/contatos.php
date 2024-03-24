<?php require_once('header.php'); 
$titulo = "Fale conostco"
?>

<!-- INICIO TOPO DA PAGINA DO SITE -->

<div class="topo-pagina">
    <h1>Fale conosco</h1>
    <p><a href="index.php" title="contatos">Inicio ></a> Contatos </p>
</div>

<!-- FIM TOPO DA PAGINA DO SITE -->

<!-- INICIO CONTATOS DO SITE -->

<section class="contatos">

<!-- INICIO BLOCOS DE CONTATOS DO SITE -->

<div class="icone-box">
    <!-- INICIO ITEM BLOCO DO SITE -->
    <div class="icons">
        <i class="fas fa-phone"></i>
        <h3>Atendimentos Fones</h3>
        <p>84 9 9666-2653</p>
        <p>84 9 9666-2653</p>
    </div>
    <!-- FIM ITEM BLOCO DO SITE -->
    <!-- INICIO ITEM BLOCO DO SITE -->
    <div class="icons">
        <i class="fas fa-envelope"></i>
        <h3>Nossos emails</h3>
        <p>quentinhadelivery@gmail.com</p>
        
    </div>
    <!-- FIM ITEM BLOCO DO SITE -->
    <!-- INICIO ITEM BLOCO DO SITE -->
    <div class="icons">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Endereço</h3>
        <p>Rua Lourival Caetano Ferreira, 470 <br>
            Alto do Sumaré <br>
            Mossoró/RN <br>
            59633-710</p>

    </div>
    <!-- FIM ITEM BLOCO DO SITE -->
    

</div>


<!-- FIM BLOCOS DE CONTATOS DO SITE -->

<!-- INICIO FORMULARIO DE CONTATOS DO SITE -->

<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Deixe sua sujestão por email</h3>
        <div class="inputBox">
            <input type="text" name="nome" placeholder="Seu nome completo" class="box">
            <input type="email" name="email" placeholder="Seu E-mail" class="box">
        </div>
        <div class="inputBox">
            <input type="tel" name="telefone" placeholder="Seu telefone" class="box">
            <input type="text" name="assunto" placeholder="Assunto" class="box">
        </div>
        <textarea name="qd" placeholder="Sua sugestão" cols="30" rows="10"></textarea>
        <button type="submit" class="btn"> Enviar sugestão</button>
    </form>
</div>


<!-- FIM FORMULARIO DE CONTATOS DO SITE -->


<!-- INICIO MAPA GOOGLE DO SITE -->
<br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1181.2354478019986!2d-37.32568775642441!3d-5.2333580335978915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ba07db8185bc5b%3A0xb1156d2070715e5a!2sR.%20Girlane%20Gomes%20Pereira%2C%20470%20-%20Alto%20do%20Sumar%C3%A9%2C%20Mossor%C3%B3%20-%20RN%2C%2059633-830!5e0!3m2!1spt-BR!2sbr!4v1710295982401!5m2!1spt-BR!2sbr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- FIM MAPA GOOGLE DO SITE -->

</section>

<!-- FIM CONTATOS DO SITE -->


<?php require_once('footer.php'); 