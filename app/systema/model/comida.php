<?php

/**
 * Description of teste
 *
 * @author vinicius
 */
class comida extends CRUD implements DBbase {

    public function __construct() {
        self::$arValores['pedido'] = $this->getDados();
        self::$tabela = "tb_pessoa";
        self::$primayKey = "cd_pessoa";
    }

    public function _alterar($cd) {
        self::alterar($cd);
    }

    public function _excluir($cd) {
        self::exluir($cd);
    }

    public function _incluir() {
        self::inserir();
    }

    public function pag() {
        return self::Paginacao();
    }

    public function infoDados($cd = NULL) {
        $obj->listar = $this->listagem();
        return $obj;
    }

    public function listagem() {
        $elemente = "*";
        $teste = self::selectAll("", $elemente);
        return $teste;
    }

    public function unicoRegisto() {
        return self::umResgisto("", "*", $_REQUEST['cd']);
    }

    function getDados() {
        $pedido = $_REQUEST['pedido'];
        return $pedido;
    }

}
