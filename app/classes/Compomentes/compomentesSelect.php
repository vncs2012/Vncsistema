<?php

/**
 * Description of compomentesBase
 *
 * @author vinicius
 */
class compomentesSelect extends compomentesBase
{
    public $name;
    public $cd = "";
    public $value = "";
    public $valor = "";
    public $type = "";
    public $selecao = "";

    public function criarHtml()
    {
        if ($this->type == "mutiplo") {
            $this->class = 'class="select2_multiple form-control" multiple="multiple"';
        } elseif ($this->type == "select") {
            $this->class = 'class="select2_single form-control" tabindex="-1"';
        }
        $cd = $this->cd;
        $no = $this->value;
        $select = "
                <div class='form-group'>
                    <div class='col-md-12 col-sm-12 col-xs-12'>
                    <label class='control-label'>{$this->label}</label>
                </div>
                <div class='col-md-12 col-sm-12 col-xs-12'>
          <select name='{$this->name}' {$this->class}>";
        if ($this->type == 'select') {
            $select .= "<option value=''></option>";
        }
        foreach ($this->valor as $key => $v) {
            if ($this->type == "mutiplo") {
                if (array_search($v->$cd, $this->selecao)) {
                    $selected = "selected";
                }
            } else {
                $selected = ($v->$cd == $this->selecao) ? "selected" : "";
            }
            $select .= "<option value='{$v->$cd}' $selected>{$v->$no}</option>";
        }
        $select .= "</select>
        </div>
      </div>";
        return $select;
    }
}
