
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 01/11/2017 21:36:02
 */

    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[cd_rotina]";
    $new->label = "cd_rotina";
    $new->value = $umRegisto->cd_rotina;
    $new->type = "int";
    $conteudo .= $new->criarHtml();
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[no_rotina]";
    $new->label = "no_rotina";
    $new->value = $umRegisto->no_rotina;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[ic_rotina]";
    $new->label = "ic_rotina";
    $new->value = $umRegisto->ic_rotina;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[ds_rotina]";
    $new->label = "ds_rotina";
    $new->value = $umRegisto->ds_rotina;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[no_pasta]";
    $new->label = "no_pasta";
    $new->value = $umRegisto->no_pasta;
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[cd_modulo]";
    $new->label = "cd_modulo";
    $new->value = $umRegisto->cd_modulo;
    $new->type = "int";
    $conteudo .= $new->criarHtml();
    
$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST[{$aspaSimples}r{$aspaSimples}]}&p={$_REQUEST[{$aspaSimples}r{$aspaSimples}]}&a=incluir";
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;