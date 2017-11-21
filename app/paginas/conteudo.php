<?php
    // $util = new util();
$r = (!empty(util::getUrl('r'))) ? util::getUrl('r') :0;
$modulo = (!empty(util::getUrl('p'))) ? util::getUrl('p') :0;;
// print $rotina."->".$modulo;
$rotina = new paginas();
$route=$rotina->getPagina($r);
if (!empty($route)) {
    include_once 'app/classes/controller/controllerModel.php';
} else {
    include_once 'app/paginas/rotina.php';
}
