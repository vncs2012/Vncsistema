<?php
if(isset($_REQUEST['arquivo'])){
   if(file_exists('../../../autoload.php')){
    include_once "../../../autoload.php";
   }
   var_dump( include_once "../../../autoload.php");
    $no_arquivo = $_REQUEST["arquivo"];
    $acao=$_REQUEST["acao"];
    $class = Factory::obj()->criar("$no_arquivo");
    
}else{
    $pg = new paginas();
    $pagina = $pg->getPagina($_REQUEST['p']);
    $no_arquivo=$pagina->no_arquivo;
    $tc = Factory::obj()->criar('TableCreator');
    $class = Factory::obj()->criar("$no_arquivo");
    $codigo = $_REQUEST['cd'];
    @$acao = $_REQUEST['a'];
}
print"switch";
var_dump($class);

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
