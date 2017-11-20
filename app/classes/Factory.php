<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factory
 *
 * @author vinicius
 */
class Factory
{

    //put your code here

    private $ar_classes = array();
    public static $instance;

    private function __construct()
    {
    }

    public static function obj()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }
        return self::$instance;
    }

    public function criar($tipo)
    {
        if (array_key_exists($tipo, $this->ar_classes)) {
            return new $this->ar_classes[$tipo]();
        } else {
            switch ($tipo) {
                default:
                    return new $tipo();
                    break;
            }
        }
    }
}
