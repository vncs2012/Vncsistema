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
class compomentesBotton extends compomentesBase
{
    public $onclick;
    public $placeholder = "";
    public $value = "";

//put your code here
    public function criarHtml()
    {
        return "<a href='?m={$_REQUEST['m']}&r={$_REQUEST['r']}&a=formIncluir' onclick='$this->onclick'><i class='glyphicon glyphicon-plus'></i></a>";
    }
}
