
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 22/11/2017 12:02:57
 */

    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido[no_marca_peneu]";
    $new->label = "Marca";
    $new->type = "text";
    $conteudo .= $new->criarHtml();
    
$new = Factory::obj()->criar("compomentesForm");
$new->action = 'sub("'.$route->no_arquivo.'","incluir","'.$route->cd_rotina.'","'.$route->cd_modulo.'")';
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
