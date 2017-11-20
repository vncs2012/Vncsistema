
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
    $new->type = "text";
    $conteudo .= $new->criarHtml();

$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['r']}&p={$_REQUEST['r']}&a=incluir";
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
