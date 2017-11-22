
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 16/11/2017 15:11:55
 */
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[no_penalidade]";
    $new->label = "no_penalidade";
    $new->value = $umRegisto->no_penalidade;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[vl_penalidade]";
    $new->label = "vl_penalidade";
    $new->id = "moeda";
    $new->value = $umRegisto->vl_penalidade;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
$new = Factory::obj()->criar("compomentesForm");
$new->action = 'sub("'.$route->no_arquivo.'","alterar","'.$route->cd_rotina.'","'.$route->cd_modulo.'","'.util::getUrl("cd").'")';
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;