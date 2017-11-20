
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
$new->type = "text";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[hr_inicio]";
$new->label = "hr_inicio";
$new->type = "date";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[hr_final]";
$new->label = "hr_final";
$new->type = "date";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[qnt_semanais]";
$new->label = "qnt_semanais";
$new->type = "number";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['r']}&p={$_REQUEST['p']}&a=incluir";
$new->conteudo = $conteudo;
$form = $new->criarHtml();
print $form;

/** Exemplo de Seletion option
$bus = Factory::obj()->criar("pessoa");
$new = Factory::obj()->criar("compomentesSelect");
$new->name = "pedido[cd_pessoa]";
$new->cd = "cd_pessoa";
$new->value = "no_pessoa";
$new->type = "select";// select / mutiplo
$new->label = "Pessoas";
$new->valor = $bus->getPessoas();
$conteudo .= $new->criarHtml();
*/
