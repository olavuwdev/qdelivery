<?php require_once('header.php'); ?>

<!-- INICIO TOPO DA PAGINA DO SITE -->
<div class="topo-pagina">
    <h1>Monte sua quentinha</h1>
    <p><a href="index.php" title="Montar pedido">Inicio ></a> Montar pedido </p>
</div>
<!-- FIM TOPO DA PAGINA DO SITE -->

<!-- INICIO MONTAGEM VIRTUAL SITE -->
<section class="montagem">

    <!-- SELEÇÃO DE PROTEÍNA -->
    <h1 class="titulo">ESCOLHA SUA <span>PROTEÍNA</span></h1>
    <h2 class="sub-titulo">Selecione ate 2 <span>PROTEÍNAS</span></h2>
    <div class="box-container-proteinas">
        <?php
        // Supondo que $proteinas seja um array de objetos com as opções de proteínas
        //foreach ($proteinas as $proteina) {
            echo '
            <div class="item">
                
                <h3>' . 'Carne de sol' . '</h3>
                <p>' . '$proteina->descricao' . '</p>
                <label class="checkbox-container">
                    <input type="checkbox" name="proteina" value="' .' $proteina->id' . '">
                    <span class="checkmark"></span>
                </label>
            </div>';
            echo '
            <div class="item">
                
                <h3>' . '$proteina->nome' . '</h3>
                <p>' . '$proteina->descricao' . '</p>
                <button onclick="selecionarProteina(' . '$proteina->id' . ')">Selecionar</button>
            </div>';
            echo '
            <div class="item">
                
                <h3>' . '$proteina->nome' . '</h3>
                <p>' . '$proteina->descricao' . '</p>
                <button onclick="selecionarProteina(' . '$proteina->id' . ')">Selecionar</button>
            </div>';
        //}
        ?>
    </div>

    <!-- SELEÇÃO DE ACOMPANHAMENTOS -->
    <h1 class="titulo">ESCOLHA SEUS <span>ACOMPANHAMENTOS</span></h1>
    <div class="box-container acompanhamentos">
        <?php
        // Supondo que $acompanhamentos seja um array de objetos com as opções de acompanhamentos
        foreach ($acompanhamentos as $acompanhamento) {
            echo '
            <div class="item">
                <img src="' . $acompanhamento->imagem . '" alt="' . $acompanhamento->nome . '">
                <h3>' . $acompanhamento->nome . '</h3>
                <p>' . $acompanhamento->descricao . '</p>
                <button onclick="selecionarAcompanhamento(' . $acompanhamento->id . ')">Selecionar</button>
            </div>';
        }
        ?>
    </div>

    <!-- SELEÇÃO DE ADICIONAIS -->
    <h1 class="titulo">ESCOLHA SEUS <span>ADICIONAIS</span></h1>
    <div class="box-container adicionais">
        <?php
        // Supondo que $adicionais seja um array de objetos com as opções de adicionais
        //foreach ($adicionais como $adicional) {
            echo '
            <div class="item">
                <img src="' . '$adicional->imagem' . '" alt="' . '$adicional->nome' . '">
                <h3>' . '$adicional->nome' . '</h3>
                <p>' . '$adicional->descricao' . '</p>
                <button onclick="selecionarAdicional(' . '$adicional->id' . ')">Selecionar</button>
            </div>';
        //}
        ?>
    </div>

    <!-- RESUMO DO PEDIDO -->
    <h1 class="titulo">RESUMO DO <span>PEDIDO</span></h1>
    <div class="resumo-pedido">
        <h3>Proteína:</h3>
        <p id="resumo-proteina"></p>
        <h3>Acompanhamentos:</h3>
        <p id="resumo-acompanhamentos"></p>
        <h3>Adicionais:</h3>
        <p id="resumo-adicionais"></p>
        <button class="btn">Finalizar Pedido</button>
    </div>
</section>
<!-- FIM LOJA VIRTUAL SITE -->

<?php require_once('footer.php'); ?>

<script>
// Funções JavaScript para selecionar opções e atualizar o resumo do pedido
function selecionarProteina(id) {
    // lógica para selecionar a proteína e atualizar o resumo
}

function selecionarAcompanhamento(id) {
    // lógica para selecionar o acompanhamento e atualizar o resumo
}

function selecionarAdicional(id) {
    // lógica para selecionar o adicional e atualizar o resumo
}
</script>
