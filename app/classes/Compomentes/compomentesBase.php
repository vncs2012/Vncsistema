<?php
/**
 * Description of compomentesBase
 *
 * @author vinicius
 */
abstract class compomentesBase
{
    public $class;
    public $name;
    public $id;
    public $label = null;

    abstract public function criarHtml();

    public function label()
    {
        return "<label class='control-label'>$this->label</label>";
    }
}
