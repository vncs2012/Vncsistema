
<?php
$tipo_banco =  array('integer','text');
$tipo_html =  array('number','text');


foreach ($info_table as $key => $value) {
  if(empty($value->COLUMN_KEY)){
    $type = str_replace($tipo_banco,$tipo_html,$value->data_type);
    $ar_incluir[] ='
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido['.$value->column_name.']";
    $new->label = "'.$value->column_name.'";
    $new->type = "'.$type.'";
    $conteudo .= $new->criarHtml();
    ';
  }
}

$incluir='
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * '.date("d/m/Y H:i:s").'
 */
'.implode("",$ar_incluir).'
$new = Factory::obj()->criar("compomentesForm");
$new->action = "?r={$_REQUEST['.$aspaSimples.'r'.$aspaSimples.']}&p={$_REQUEST['.$aspaSimples.'r'.$aspaSimples.']}&a=incluir";
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
';
print "./../app/systema/view/incluir/{$no_arquivo}.php <br />";
$arquivo_incluir = fopen("../../app/systema/view/incluir/{$no_arquivo}.php","w+");
if($arquivo_incluir == false){
  print "<br />nao foi possivel criar arquivo view/incluir/{$no_arquivo}.php";
}else{
  print " <br /> Arquivo view/incluir/{$no_arquivo}.php criado com sucesso!";
}
fwrite($arquivo_incluir,$incluir);
fclose($arquivo_incluir);
