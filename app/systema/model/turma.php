
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 24/02/2017 21:37:38
 */
class turma extends CRUD implements DBbase {

    public function __construct() {
        self::$arValores["pedido"] = $this->getDados();
        self::$tabela = "tb_turma";
        self::$primayKey = "cd_turma";
    }

    public function _alterar($cd) {
        self::alterar($cd);
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
        $elemente = "cd_turma,ds_turma,hr_inicio,hr_final,qnt_semanais";
        $conteudo = self::selectAll("", $elemente);
        return $conteudo;
    }

    public function unicoRegisto() {
        return self::umResgisto("", "cd_turma,ds_turma,hr_inicio,hr_final,qnt_semanais", $_REQUEST["cd"]);
    }

    function getDados() {
        $pedido = $_REQUEST["pedido"];
        return $pedido;
    }

}
