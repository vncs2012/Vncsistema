<?php
include "../app/classes/db/DB.php";
    $stmt = DB::prepare("SHOW TABLES");
    if ($stmt->execute()) {
      $tabelas = $stmt->fetchAll();
    }else{
      print "erro na conexão";
    }
    $stmt = DB::prepare("select * from tb_modulo");
    if ($stmt->execute()) {
      $modulos = $stmt->fetchAll();
    }else{
      print "erro na conexão";
    }
    // var_dump($tabelas);
?>
<link href="" >

<form  method="post" action="gerarArquivos/gerador.php">
  <label>Selecione o Modulo<label><br />
    <select class="" name="cd_modulo">
      <option value=""></option>
      <?php
        foreach ($modulos as $key => $value) {
        print "<option value='{$value->cd_modulo}'>{$value->no_modulo}</option>";
        }
       ?>
    </select><br />
  <label>Selecione a tabela para Rotina<label><br />
    <select class="" name="no_tabela">
      <option value=""></option>
      <?php
        foreach ($tabelas as $key => $value) {
        print "<option value='{$value->Tables_in_vncsistema}'>{$value->Tables_in_vncsistema}</option>";
        }
       ?>
    </select><br />
    <label>Digite nome para Visualização<label><br />
      <input type="text" name="no_visual"><br />
      <label>Digite nome do arquivo<label><br />
      <input type="text" name="no_arquivo"><br />
      <input type="submit" value="salvar">
</form>
