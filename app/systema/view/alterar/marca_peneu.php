
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 22/11/2017 12:02:57
 */

    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[no_marca_peneu]";
    $new->label = "Marca";
    $new->value = $umRegisto->no_marca_peneu;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
$new = Factory::obj()->criar("compomentesForm");
$new->action ='sub("'.$route->no_arquivo.'","alterar","'.$route->cd_rotina.'","'.$route->cd_modulo.'","'.util::getUrl("cd").'")';
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;