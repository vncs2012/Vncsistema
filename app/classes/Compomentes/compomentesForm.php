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
class compomentesForm extends compomentesBase
{
    public $action;
    public $conteudo;

//put your code here
    public function criarHtml()
    {
        ;
        $form = "
        <div class='row'>
        <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class='x_panel'>
        <div class='x_content'>
<form id='form' class='form-horizontal form-label-left' data-parsley-validate  enctype='multipart/form-data' method='POST' >
   " . $this->conteudo . "
   <div class='ln_solid'></div>
   <div class='form-group'>
   <div class='col-md-3 col-sm-3 col-xs-12 col-md-offset-9'>
   <button class='btn btn-primary' type='submit'>Cancel</button>
   <a class='btn btn-success' onclick='$this->action'>Salvar</a>
   </div>
   </div>
</form>
</div>
</div>
</div>
</div>
";
        return $form;
    }
}
