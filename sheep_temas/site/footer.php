<br>
<!-- INICIO RODAPE SITE -->
<!-- TESTANDO FUNCIONALIDADE VIEW -->

<?php

$sheep->Leitura('dados', "WHERE tipo = 'config' ORDER BY ultima_atualizacao DESC");
$sheepEmpresa = Formata::Resultado($sheep);
if($sheepEmpresa){
    foreach($sheep->getResultado() as $empresa){
    $empresa  = (object) $empresa;
    }
    $sheep->Leitura('app_cidades', "WHERE cidade_id = {$empresa->cidade}");
    $sheepCidade = Formata::Resultado($sheep);
    if($sheepCidade){
        foreach($sheep->getResultado() as $cidade){
            $cidade = (object) $cidade;
        } 
    }

?>
<section class="rodape">
    <div class="box-container">
        <!-- INICIO ITEM RODAPE SITE -->
        <div class="box">
            <h3>Quentinha Delivery</h3>
                <p>Melhor quentinha da cidade</p>
                <div class="rede-sociais">
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="//www.instagram.com/quentinhadelivery0" class="fab fa-instagram"></a>
                    <a href="" class="fab fa-youtube"></a>
                    <a href="" class="fab fa-facebook-f"></a>
                </div>
        </div>
            <!-- FIM ITEM RODAPE SITE -->     
            
            <!-- INICIO ITEM RODAPE SITE -->
        <div class="box">
            <h3>Faça seu pedido</h3>
            <a class="link" title="WhatsApp" href="https://api.whatsapp.com/send/?phone=55<?= $empresa->whatsapp ?>&text=Olá%2C+gostaria+de+fazer+um+pedido%21&type=phone_number&app_absent=0"><?= $empresa->whatsapp ?></a>
            <br><br>
            <a class="link" href="mailto:quentinhadelivery@gmail.com" title="quentinhadelivery@gmail.com">quentinhadelivery@gmail.com</a>

            </div>
            <!-- FIM ITEM RODAPE SITE -->       
            
            <!-- INICIO ITEM RODAPE SITE -->
        <div class="box">
            <h3>Localização</h3>
                <p> 
                    <?= $empresa->endereco . ", " . $empresa->numero ?> <br>
                    <?= $empresa->bairro?> <br>
                    <?= $cidade->cidade_nome . "/" . $cidade->cidade_uf?><br>
                    <?= $empresa->cep?>


                </p>
            </div>
            <!-- FIM ITEM RODAPE SITE -->
        </div>
        
        <div class="direitos">
            <?= RODAPE_PAINEL ?>
        </div>
        <?php } ?>
</section>

<!-- FIM RODAPE SITE -->

