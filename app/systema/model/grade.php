
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 13/02/2017 18:24:03
 */
class grade extends CRUD implements DBbase
{
    public function __construct()
    {
        self::$arValores["pedido"] = $this->getDados();
        self::$tabela = "tb_grade";
        self::$primayKey = "cd_grade";
    }

    public function _alterar($cd)
    {
        self::alterar($cd);
        $arFk = self::processarFk("cd_grade", "cd_atividade", $cd, self::$arValores['pedido']['mutiplo']);
        if (self::alterarFk("tb_grade_atividade", $arFk, "cd_grade", $cd)) {
            self::commit();
        }
    }

    public function _excluir($cd)
    {
        self::excluirFk("tb_grade_atividade", "cd_grade", $cd);
        self::exluir($cd);
    }

    public function _incluir()
    {
        $cd = self::inserir();
        $arFk = self::processarFk("cd_grade", "cd_atividade", $cd, self::$arValores['pedido']['mutiplo']);
        self::inserirFk("tb_grade_atividade", $arFk);
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
        $elemente = "cd_grade,no_grade,bo_grade";
        $conteudo = self::selectAll("", $elemente);
        return $conteudo;
    }

    public function unicoRegisto()
    {
        return self::umResgisto("", "cd_grade,no_grade,bo_grade", $_REQUEST["cd"]);
    }

    public function getDados()
    {
        $pedido = $_REQUEST["pedido"];
        return $pedido;
    }
    public function getAtividades()
    {
        $sql = "select * from tb_atividade;";
        $stmt = self::prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        }
    }
    public function getSelecao()
    {
        $sql = "select cd_atividade from tb_grade
                  		 join tb_grade_atividade using(cd_grade)
                  		 where cd_grade =".$_REQUEST['cd'];
        $stmt = self::prepare($sql);
        if ($stmt->execute()) {
            foreach ($stmt->fetchAll() as $value) {
                $ar[] = $value->cd_atividade;
            }
        }
        return $ar;
    }
}
