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
class compomentesListagem extends compomentesBase
{
    public $pagina ="";
    public $placeholder ;
    public $botao ="";
    public $conteudo="teste";

//put your code here
    public function criarHtml()
    {
        return '<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>'.$this->pagina.'</h2>
                <ul class="nav navbar-right panel_toolbox">
                <li>'.$this->botao.'</li>
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">'.$this->conteudo.'</div>
              </div>
              </div>
              </div>';
    }
}
