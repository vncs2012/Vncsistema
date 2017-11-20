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
class compomentesInput extends compomentesBase
{
    public $name;
    public $type;
    public $onclick;
    public $placeholder = "";
    public $value = "";

//put your code here
    public function criarHtml()
    {
        $label = empty($this->label) ? "" : $this->label();
        return  "
<div class='form-group'>
<div class='col-md-12 col-sm-12 col-xs-12'>
  {$label}
  </div>
<div class='col-md-12 col-sm-12 col-xs-12'>
        <input placeholder='$this->placeholder' type='$this->type' class='$this->class form-control' onclick='$this->onclick' name='$this->name' id='$this->id' value='$this->value'/>
</div>
</div>";
    }
}
