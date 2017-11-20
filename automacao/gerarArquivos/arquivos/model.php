<?php
// print_r($info_table[0]->column_name);
foreach ($info_table as $key => $value) {
  if(!empty($value->COLUMN_KEY)){
    $primaryKey = $value->column_name;
  }
  $ar_colunas[] = $value->column_name;
}
$model ='
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * '.date("d/m/Y H:i:s").'
 */
class '.$no_arquivo.' extends CRUD implements DBbase {

    public function __construct() {
        self::$arValores["pedido"] = $this->getDados();
        self::$tabela = "'.$no_tabela.'";
        self::$primayKey = "'.$primaryKey.'";
    }

    public function _alterar($cd) {
       $cd =self::alterar($cd);
       if($cd){
            self::commit();
       }
    }

    public function _excluir($cd) {
        self::exluir($cd);
    }

    public function _incluir() {
       $cd = self::inserir();
        if (is_numeric($cd)) {
            self::commit();
        }
    }

    public function pag() {
        return self::Paginacao();
    }

    public function infoDados($cd = NULL) {
        $obj->listar = $this->listagem();
        return $obj;
    }

    public function listagem() {
        $elemente = "'.implode(",",$ar_colunas).'";
        $conteudo = self::selectAll("", $elemente);
        return $conteudo;
    }

    public function unicoRegisto() {
        return self::umResgisto("", "'.implode(",",$ar_colunas).'", $_REQUEST["cd"]);
    }

    function getDados() {
        $pedido = $_REQUEST["pedido"];
        return $pedido;
    }
}
';

$arquivo_model = fopen("../../app/systema/model/{$no_arquivo}.php","w+");
if($arquivo_model == false){
    print "<br />nao foi possivel criar o model";
}else{
  print "<br />Arquivo Model/{$no_arquivo}.php criado com sucesso!";
}
fwrite($arquivo_model,$model);
fclose($arquivo_model);
