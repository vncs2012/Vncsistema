<?php

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[cd_pessoa]";
$new->type = "hidden";
$new->value = "$umRegisto->cd_pessoa";
$conteudo = $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[no_pessoa]";
$new->label = "Nome";
$new->type = "text";
$new->value = "$umRegisto->no_pessoa";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->name = "pedido[email]";
$new->label = "Email";
$new->type = "text";
$new->value = "$umRegisto->email";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesInput");
$new->type = "submit";
$new->value = "Alterar";
$conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['r']}&p={$_REQUEST['r']}&a=alterar";
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;
