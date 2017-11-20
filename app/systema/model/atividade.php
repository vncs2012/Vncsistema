
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 24/01/2017 22:17:06
 */
class atividade extends CRUD implements DBbase
{
    public function __construct()
    {
        self::$arValores["pedido"] = $this->getDados();
        self::$tabela = "tb_atividade";
        self::$primayKey = "cd_atividade";
    }

    public function _alterar($cd)
    {
        self::alterar($cd);
    }

    public function _excluir($cd)
    {
        self::exluir($cd);
    }

    public function _incluir()
    {
        $cd = self::inserir();
        if (is_numeric($cd)) {
            self::commit();
        }
    }

    public function pag()
    {
        return self::Paginacao();
    }

    public function infoDados($cd = null)
    {
        $obj->listar = $this->listagem();
        return $obj;
    }

    public function listagem()
    {
        $elemente = "cd_atividade,no_atividade,bo_atividade";
        $conteudo = self::selectAll("", $elemente);
        return $conteudo;
    }

    public function unicoRegisto()
    {
        return self::umResgisto("", "cd_atividade,no_atividade,bo_atividade", $_REQUEST["cd"]);
    }

    public function getDados()
    {
        $pedido = $_REQUEST["pedido"];
        return $pedido;
    }
}
