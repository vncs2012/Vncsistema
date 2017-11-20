
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 24/02/2017 21:37:38
 */
$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[ds_turma]";
$new->label = "ds_turma";
$new->value = $umRegisto->ds_turma;
$new->type = "text";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[hr_inicio]";
$new->label = "hr_inicio";
$new->value = $umRegisto->hr_inicio;
$new->type = "date";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[hr_final]";
$new->label = "hr_final";
$new->value = $umRegisto->hr_final;
$new->type = "date";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[qnt_semanais]";
$new->label = "qnt_semanais";
$new->value = $umRegisto->qnt_semanais;
$new->type = "number";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['r']}&p={$_REQUEST['p']}&a=alterar&cd={$_REQUEST['cd']}";
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;
