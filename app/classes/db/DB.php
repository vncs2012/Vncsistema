<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of banco
 *
 * @author vinicius
 */
class DB
{
    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=localhost;port=5432;dbname=vncsistema', 'root', 'vncs');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return self::$instance;
    }

    public static function prepare($sql)
    {
        return self::getInstance()->prepare($sql);
    }

    public static function beginTransaction()
    {
        DB::getInstance()->beginTransaction();
    }

    public static function rollBack()
    {
        DB::getInstance()->rollBack();
    }

    public static function commit()
    {
        DB::getInstance()->commit();
    }

    public static function lastInsertId()
    {
        return DB::getInstance()->lastInsertId();
    }
}
