<?php
include "../../app/classes/db/DB.php";
$no_arquivo = $_REQUEST['no_arquivo'];
$no_tabela = $_REQUEST['no_tabela'];
$no_visual = $_REQUEST['no_visual'];
$cd_modulo = $_REQUEST['cd_modulo'];
$aspasDublas = '"';
$aspaSimples = "'";

    $stmt = DB::prepare("select COLUMN_KEY,table_schema,column_name,column_default,is_nullable,data_type from information_schema.columns where table_name = '$no_tabela'");
    if ($stmt->execute()) {
      $info_table= $stmt->fetchAll();
    }else{
      print "erro na conexão";
    }
    print"<pre>";
    print_r($info_table);
    print"</pre>";



  require "arquivos/model.php";
  require "arquivos/view_incluir.php";
  require "arquivos/view_alterar.php";
  require "arquivos/view_listar.php";

$sql ="INSERT INTO tb_rotina(no_rotina, ic_rotina, ds_rotina, no_arquivo, bo_rotina, cd_modulo)
       VALUES('$no_visual', NULL, NULL, '$no_arquivo', true, $cd_modulo)";
  
  $stmt = DB::prepare($sql);
  // print_r($stmt->execute());
  if ($stmt->execute()) {
    print "Sucesso A inserção";
  }else{
    print "erro na conexão";
  }
