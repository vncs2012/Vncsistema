<?php

foreach ($info_table as $key => $value) {
  if(!empty($value->COLUMN_KEY)){
    $primaryKey = $value->column_name;
  }else{
    $ar_colunasListar[] = '$tc->add("'.$value->column_name.'", $example->'.$value->column_name.');';
  }
}



$listagem ='
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * '.date("d/m/Y H:i:s").'
 */
 $tc->table_id = "datatable";
 $tc->table_class = "table table-striped table-bordered";
$tc->tabela = "'.$no_arquivo.'";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->'.$primaryKey.';
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->'.$primaryKey.';
    $opcao .= $new->criarHtml();

'.implode("\n",$ar_colunasListar).'
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();
//-----------------Listagem--------------------
$listar = Factory::obj()->criar("compomentesListagem");
$listar->conteudo = $tc->output();
$listar->botao = $botao;
$listar->pagina = "'.$no_visual.'";
print $listar->criarHtml();
';
$arquivo_listagem = fopen("../../app/systema/view/listar/{$no_arquivo}.php","w+");
if($arquivo_listagem == "false"){
  print "<br />nao foi possivel criar arquivo view/listar/{$no_arquivo}.php";
}else{
  print "<br />Arquivo view/listar/{$no_arquivo}.php criado com sucesso!";
}
fwrite($arquivo_listagem,$listagem);
fclose($arquivo_listagem);
