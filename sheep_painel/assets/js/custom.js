/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";

jQuery(function($){
 
    $("#cpfmj").mask("999.999.999-99")
    $("#cnpj").mask("99.999.999/9999-99")
    $("#fone").mask("(99)9999-9999")
    $("#cel").mask("(99)99999-9999")
    $("#cepmj").mask("99.999-999")
});

/**
 * LOAD CIDADES
 */
$(function(){
    $('.load_estados').change(function(){

        var estado = $('.load_estados');
        var cidade = $('#load_cidades');
        var caminho = ($("#caminho").lenght ? $("#caminho").attr('class') + '/cidades.php' : '../qd/cidades.php');

        estado.attr('disable', 'true');
        cidade.attr('disable', 'true');


        cidade.html('<option value=""> Carregando cidades...</option>');

        $.post(caminho, {estado: $(this).val()}, function(cidades){
            cidade.html(cidades).removeAttr('disabled');
            estado.removeAttr('disabled');            
        });

    });
});


/**
 * LOAD CATEGORIAS FILHOS
 */


/**
 * 
 * ADD FOTOS NA GALERIA
 */



/**
 * EXCLUIR GALERIA DE PRODUTOS
 */



/**
 * EXCLUIR ARQUIVO DE PRODUTOS
 */




/**
 * EXCLUIR GALERIA DE PAGINAS
 */





