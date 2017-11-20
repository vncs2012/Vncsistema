<?php

if (isset($_REQUEST['r']) && isset($_REQUEST['p'])) {
    include_once 'app/classes/controller/controllerModel.php';
} else {
    include_once 'app/paginas/rotina.php';
}
