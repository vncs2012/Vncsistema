<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of compomentesBase
 *
 * @author vinicius
 */
class compomentesTeste extends compomentesBase
{
    public $nome;

//put your code here
    public function criarHtml()
    {
        print "<label>{$this->nome}</label>";
    }
}
