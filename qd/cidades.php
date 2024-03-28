<?php 
require_once('../sheep_core/config.php');

$estado = filter_input(INPUT_POST, 'estado', FILTER_VALIDATE_INT);
$lerCidades = new Ler();
$lerCidades->Leitura('app_cidades', "WHERE estado_id = :id", "id={$estado}");

sleep(1);

echo '<option value="" disabled selected> Selecione a cidade</option>';
foreach($lerCidades->getResultado() as $cidade):
    $cidade = (object) $cidade;
    echo "<option value='{$cidade->cidade_id}'> {$cidade->cidade_nome}</option>";
endforeach;

?>