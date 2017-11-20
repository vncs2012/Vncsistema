
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 11/01/2017 00:07:55
 */
class pessoa extends CRUD implements DBbase
{
    public function __construct()
    {
        self::$arValores["pedido"] = $this->getDados();
        self::$tabela = "tb_pessoa";
        self::$primayKey = "cd_pessoa";
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
        self::inserir();
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
        $elemente = "cd_pessoa,no_pessoa,email";
        $conteudo = self::selectAll("", $elemente);
        return $conteudo;
    }

    public function unicoRegisto()
    {
        return self::umResgisto("", "cd_pessoa,no_pessoa,email", $_REQUEST["cd"]);
    }

    public function getDados()
    {
        $pedido = $_REQUEST["pedido"];
        return $pedido;
    }

    public function getPessoas()
    {
        $sql = "select * from tb_pessoa ;";
        $stmt = self::prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        }
    }
}
