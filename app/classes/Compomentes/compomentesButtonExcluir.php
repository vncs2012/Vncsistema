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
    public $no_arquivo = "";
    public $cd_rotina = "";
    public $cd_modulo = "";

//put your code here
    public function criarHtml()
    {
        $action = 'excluir("'.$this->no_arquivo.'","'.$this->cd_rotina.'","'.$this->cd_modulo.'","'.$this->value.'")';
        return "<a onclick='$action' class='mdl-button mdl-js-button mdl-button--icon'>
  <i class='glyphicon glyphicon-minus'></i></a>";
    }
}
// $new->action = 'excluir("'.$route->no_arquivo.'","'.$route->cd_rotina.'","'.$route->cd_modulo.'","'.util::getUrl("cd").'")';