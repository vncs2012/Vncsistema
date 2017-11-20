<?php

/**
 * Description of CRUD
 *
 * @author Vinicius C Miranda
 */
class CRUD extends DB {

    protected static $arValores;
    protected static $tabela;
    protected static $primayKey;
    protected static $arErros;
    protected static $sql = "";

    public static function inserir($bo = true) {
        $arColunas = self::processarPedido();
        try {
            if ($bo) {
                self::beginTransaction();
            }
            self::$sql = "insert into " . self::$tabela . " (" . implode(",", $arColunas) . ") values(:" . implode(",:", $arColunas) . ")";
            $stmt = self::prepare(self::$sql);
            foreach (self::$arValores['pedido'] as $key => $valores) {
                if ($key != "mutiplo") {
                    $stmt->bindValue(':' . $key, $valores);
                }
            }
            if ($stmt->execute()) {
                return self::lastInsertId();
            } else {
                print 'algum problema';
            }
        } catch (Exception $ex) {
            print "</br>" . $ex;
        }
    }

    public static function alterar($cd) {
        $arColunas = self::processarPedido();
        try {
            self::beginTransaction();
            self::$sql = "UPDATE " . self::$tabela . " SET ";
            $tam = count($arColunas);
            foreach ($arColunas as $value) {
                $cont++;
                $vir = $tam <> $cont ? "," : "";
                self::$sql .= "$value = :$value $vir";
            }
            self::$sql .= " WHERE " . self::$primayKey . " =:" . self::$primayKey;
            $stmt = self::prepare(self::$sql);

            $stmt->bindValue(':' . self::$primayKey,$cd,PDO::PARAM_INT);
            unset(self::$arValores['pedido'][self::$primayKey]);

            foreach (self::$arValores['pedido'] as $key => $valores) {
                if ($key != "mutiplo") {
                    $stmt->bindValue(':' . $key, $valores);
                }
            }
            // print"<pre>";
            // $stmt->debugDumpParams();
            // print"</pre>";
            if ($stmt->execute()) {
                return true;
            } else {
                print 'algum problema';
            }
        } catch (Exception $ex) {
            print '' . $ex;
        }
    }

    public static function exluir($cd) {
        try {
            self::beginTransaction();
            self::$sql = "DELETE FROM " . self::$tabela . " WHERE " . self::$primayKey . " = " . $cd;

            $stmt = self::prepare(self::$sql);
            if ($stmt->execute()) {
                self::commit();
                return;
            } else {
                print 'algum problema';
            }
        } catch (Exception $ex) {
            
        }
    }

    public static function selectAll($join = null, $elemento = "*") {
        self::$sql = "select {$elemento} from " . self::$tabela . " order by " . self::$primayKey;
            try {
            $stmt = self::prepare(self::$sql);
            if ($stmt->execute()) {
                return $stmt->fetchAll();
            }
        } catch (PDOException $ex) {
            echo 'Erro ao retornar os Dados.' . $ex->getMessage();
        }
    }

    public static function umResgisto($join = null, $elemento = "*", $cd = null) {
        self::$sql = "select {$elemento} from " . self::$tabela . " where " . self::$primayKey . " = {$cd}";
        $stmt = self::prepare(self::$sql);
        print self::$sql;

        if ($stmt->execute()) {
            return $stmt->fetch();
        }
    }

    public static function Paginacao($limite = 10) {
        //seleciona o total de registros
        $sql_Total = "SELECT " . self::$primayKey . "  FROM " . self::$tabela;

        try {
            $stmt = self::prepare($sql_Total);
            $stmt->execute();
            $query_count = $stmt->rowCount(PDO::FETCH_ASSOC);
            $qtdPag = ceil($query_count / $limite);
            return $qtdPag;
        } catch (PDOexception $error_Total) {
            echo 'Erro ao retornar os Dados. ' . $error_Total->getMessage();
        }
    }

    private function processarPedido() {
        $arPedido = self::$arValores['pedido'];
        foreach ($arPedido as $chave => $value) {
            if ($chave != 'mutiplo') {
                $arColunas[] = $chave;
            }
        }
        return $arColunas;
    }

    public static function processarFk($cd_fk, $cd, $valorfk, $arProcessar = array()) {

        foreach ($arProcessar as $key => $value) {
            $arFk[$key][$cd] = $value;
            $arFk[$key][$cd_fk] = $valorfk;
        }
        return $arFk;
    }

    public static function inserirFk($tabela, $arValores) {
        $boFk = true;
        $sql = "insert into " . $tabela . " (" . implode(",", array_keys($arValores[0])) . ") values(:" . implode(",:", array_keys($arValores[0])) . ")";
        try {
            foreach ($arValores as $key => $valores) {
                $stmt = self::prepare($sql);
                foreach ($valores as $ky => $vv) {
                    $stmt->bindValue(':' . $ky, $vv);
                }
                if ($stmt->execute()) {
                    
                } else {
                    $boFk = false;
                }
            }
        } catch (PDOexception $error_Total) {
            echo 'Erro ao retornar os Dados . ' . $error_Total->getMessage();
        }
        if ($boFk) {
            self::commit();
        } else {
            print "erro";
        }
    }

    public static function alterarFk($tabela, $arValores, $cd_nome, $cd_fk) {
        self::excluirFk($tabela, $cd_nome, (int) $cd_fk);
        self::inserirFk($tabela, $arValores);
    }

    public static function excluirFk($tabela, $cd_nome, $cd_fk) {
        $sql = "DELETE FROM " . $tabela . " WHERE " . $cd_nome . " = :" . $cd_fk;
        $stmt = self::prepare($sql);
        if ($stmt->execute()) {
            
        } else {
            print "Erro";
        }
    }

}
