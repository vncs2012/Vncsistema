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
class compomentesButtonExcluir extends compomentesBase
{
    public $value = "";

//put your code here
    public function criarHtml()
    {
        return "<a href='?r={$_REQUEST['r']}&p={$_REQUEST['p']}&cd={$this->value}&a=excluir'  class='mdl-button mdl-js-button mdl-button--icon'>
  <i class='glyphicon glyphicon-minus'></i></a>";
    }
}