<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface DBbase {

    function _incluir();

    function _alterar($cd);

    function _excluir($cd);

    function listagem();

    function unicoRegisto();

    function infoDados($cd);
}
