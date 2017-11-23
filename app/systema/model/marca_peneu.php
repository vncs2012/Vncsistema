
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 22/11/2017 12:02:57
 */
class marca_peneu extends CRUD implements DBbase {

    public function __construct() {
        self::$arValores["pedido"] = $this->getDados();
        self::$tabela = "tb_marca_peneu";
        self::$primayKey = "cd_marca_peneu";
    }

    public function _alterar($cd) {
       self::alterar($cd);
    }

    public function _excluir($cd) {
        self::exluir($cd);
    }

    public function _incluir() {
       $cd = self::inserir();
    }

    public function infoDados($cd = NULL) {
        $obj->listar = $this->listagem();
        return $obj;
    }

    public function listagem() {
        $elemente = "cd_marca_peneu,no_marca_peneu,bo_ativo";
        $conteudo = self::selectAll("", $elemente);
        return $conteudo;
    }

    public function unicoRegisto() {
        return self::umResgisto("", "cd_marca_peneu,no_marca_peneu,bo_ativo", util::getUrl("cd"));
    }

    function getDados() {
        $pedido = $_POST["pedido"];
        return $pedido;
    }
}
