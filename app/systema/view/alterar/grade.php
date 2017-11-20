
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 13/02/2017 18:24:03
 */
$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[no_grade]";
$new->label = "no_grade";
$new->value = $umRegisto->no_grade;
$new->type = "text";
$conteudo .= $new->criarHtml();

$bus = Factory::obj()->criar("grade");
$new = Factory::obj()->criar("compomentesSelect");
$new->name = "pedido[mutiplo][]";
$new->cd = "cd_atividade";
$new->value = "no_atividade";
$new->type = "mutiplo"; // select / mutiplo
$new->label = "Atividades";
$new->valor = $bus->getAtividades();
$new->selecao = $bus->getSelecao();
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['r']}&p={$_REQUEST['p']}&a=alterar&cd={$_REQUEST['cd']}";
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;
