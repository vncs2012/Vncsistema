
<?php
$tipo_banco =  array('integer','text');
$tipo_html =  array('number','text');


foreach ($info_table as $key => $value) {
  if(empty($value->COLUMN_KEY)){
    $type = str_replace($tipo_banco,$tipo_html,$value->data_type);
    $ar_alterar[] ='
    $new = Factory::obj()->criar("compomentesInput");
    $new->name = "pedido['.$value->column_name.']";
    $new->label = "'.$value->column_name.'";
    $new->value = $umRegisto->'.$value->column_name.';
    $new->type = "'.$type.'";
    $conteudo .= $new->criarHtml();
    ';
  }
}

$alterar='
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * '.date("d/m/Y H:i:s").'
 */
'.implode("",$ar_alterar).'
$new = Factory::obj()->criar("compomentesForm");
$new->action ='.$aspaSimples.'sub("'.$aspaSimples.'.$route->no_arquivo.'.$aspaSimples.'","alterar","'.$aspaSimples.'.$route->cd_rotina.'.$aspaSimples.'","'.$aspaSimples.'.$route->cd_modulo.'.$aspaSimples.'","'.$aspaSimples.'.util::getUrl("cd").'.$aspaSimples.'")'.$aspaSimples.';
$new->conteudo = $conteudo;
$form = $new->criarHtml();

print $form;';

$arquivo_alterar = fopen("../../app/systema/view/alterar/{$no_arquivo}.php","w+");
if($arquivo_alterar == "false"){
  print "<br />nao foi possivel criar arquivo view/alterar/{$no_arquivo}.php";
}else{
  print "<br />Arquivo view/alterar/{$no_arquivo}.php criado com sucesso!";
}
fwrite($arquivo_alterar,$alterar);
fclose($arquivo_alterar);
