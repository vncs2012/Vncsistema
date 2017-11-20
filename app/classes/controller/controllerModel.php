<?php
if(isset($_REQUEST['arquivo'])){
    $no_arquivo = $_REQUEST["arquivo"];
    $acao=$_REQUEST["acao"];
    // $class = new $no_arquivo();
}else{
    $pg = new paginas();
    $pagina = $pg->getPagina($_REQUEST['p']);
    $no_arquivo=$pagina->no_arquivo;
    $tc = Factory::obj()->criar('TableCreator');
    $codigo = $_REQUEST['cd'];
    @$acao = $_REQUEST['a'];
}
// var_dump($class);
// $class = Factory::obj()->criar("$no_arquivo");
print"switch";
switch (@$acao) {
    case "listar":
        $listagem = $class->listagem();
        include_once "app/systema/view/listar/{$no_arquivo}.php";
        break;
    case "formIncluir":
        include_once "app/systema/view/incluir/{$no_arquivo}.php";
        break;
    case "incluir":
    print"entrou";
        $class->_incluir();
        return "ok";
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
