
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 11/01/2017 00:07:55
 */

    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[no_pessoa]";
    $new->label = "no_pessoa";
    $new->type = "text";
    $conteudo .= $new->criarHtml();

    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[email]";
    $new->label = "email";
    $new->type = "text";
    $conteudo .= $new->criarHtml();


    $bus = Factory::obj()->criar("pessoa");
    $new = Factory::obj()->criar("compomentesSelect");
    $new->name = "pedido[cd_pessoa]";
    $new->cd = "cd_pessoa";
    $new->value = "no_pessoa";
    $new->type = "select";
    $new->label = "Pessoas";
    $new->valor = $bus->getPessoas();
    $conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['r']}&p={$_REQUEST['p']}&a=incluir";
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;
