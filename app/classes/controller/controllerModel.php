<?php

if(isset($_POST['arquivo'])){

    $no_arquivo = $_POST["arquivo"];
    $acao=$_POST["acao"];
    $rotina =$_POST['rotina'];
    $modulo =$_POST['modulo'];
    include_once '../../../includeController.php';
}else{
    $pg = new paginas();
    $pagina = $pg->getPagina($_REQUEST['p']);
    $no_arquivo=$pagina->no_arquivo;
    $tc = Factory::obj()->criar('TableCreator');
    $codigo = $_REQUEST['cd'];
    @$acao = $_REQUEST['a'];
}
$listagem = "";

$class = Factory::obj()->criar("$no_arquivo");
switch (@$acao) {
    case "listar":
        $listagem = $class->listagem();
        include_once "app/systema/view/listar/{$no_arquivo}.php";
        break;
    case "formIncluir":
        include_once "app/systema/view/incluir/{$no_arquivo}.php";
        break;
    case "incluir":
        $class->_incluir();
    //    util::redirecionar("?r={$modulo}&p={$rotina}&a=listar");
        break;
    case "formAlterar":
        $umRegisto = $class->unicoRegisto();
        include_once "app/systema/view/alterar/{$no_arquivo}.php";
        break;
    case "alterar":
        $class->_alterar($codigo);
        $listagem = $class->listagem();
        include_once "app/systema/view/listar/{$no_arquivo}.php";
        break;
    case "excluir":
        $class->_excluir($codigo);
        $listagem = $class->listagem();
        include_once "app/systema/view/listar/{$no_arquivo}.php";
        break;
}
