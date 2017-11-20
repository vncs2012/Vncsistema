
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
    $new->value = $umRegisto->no_pessoa;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[email]";
    $new->label = "email";
    $new->value = $umRegisto->email;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST[{$aspaSimples}r{$aspaSimples}]}&p={$_REQUEST[{$aspaSimples}r{$aspaSimples}]}&a=incluir";
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;