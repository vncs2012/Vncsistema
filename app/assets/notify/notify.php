

<?php

$evento = util::getUrl("e");


switch($evento){
 case 'incluir':
     util::notifly("Salvo com sucesso");
 break;
 case 'alterar':
    util::notifly("Alterado com sucesso");
 break;
 case "excluir":
    util::notifly("Excluido com sucesso");
 break;
 default:
 break;


}

