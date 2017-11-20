
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 16/11/2017 15:11:55
 */
class penalidade extends CRUD implements DBbase {

    public function __construct() {
        self::$arValores["pedido"] = $this->getDados();
        self::$tabela = "tb_penalidade";
        self::$primayKey = "cd_penalidade";
    }

    public function _alterar($cd) {
       $resu= self::alterar($cd);
          if($resu){
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
        $elemente = "cd_penalidade,no_penalidade,vl_penalidade";
        $conteudo = self::selectAll("", $elemente);
        return $conteudo;
    }

    public function unicoRegisto() {
        return self::umResgisto("", "no_penalidade,vl_penalidade", $_REQUEST["cd"]);
    }

    function getDados() {
        $pedido = $_REQUEST["pedido"];
        return $pedido;
    }
}
