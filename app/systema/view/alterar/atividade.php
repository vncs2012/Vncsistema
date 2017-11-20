
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 24/01/2017 22:17:06
 */

    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[no_atividade]";
    $new->label = "no_atividade";
    $new->value = $umRegisto->no_atividade;
    $new->type = "text";
    $conteudo .= $new->criarHtml();


    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[cd_atividade]";
    $new->value = $umRegisto->cd_atividade;
    $new->type = "hidden";
    $conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['r']}&p={$_REQUEST['r']}&a=alterar";
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;
