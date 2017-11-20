
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
    $new->value = $umRegisto->vl_penalidade;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
$new = Factory::obj()->criar("compomentesForm");
$link = "?r={$_REQUEST['r']}&p={$_REQUEST['r']}&a=alterar&cd=".$_REQUEST['cd'];
$new->action = $link;
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;