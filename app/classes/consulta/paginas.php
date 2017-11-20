<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modulo
 *
 * @author vinicius
 */
class paginas extends DB
{

    //put your code here

    public function getModulo()
    {
        $sql = "select * from tb_modulo";
        $stmt = self::prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        }
    }

    public function getRotina($cdRotina)
    {
        $sql = "select * from tb_rotina where cd_modulo= " . $cdRotina;
        $stmt = self::prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        }
    }

    public function getPagina($cd_pagina)
    {
        $sql = "select * from tb_rotina where cd_rotina= " . $cd_pagina;
        $stmt = self::prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetch();
        }
    }
}
