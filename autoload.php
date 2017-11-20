<?php

/**
 * Description of autoload
 *
 * @author vinicius
 */
function __autoload($class)
{
    if (file_exists("app/systema/model/$class" . '.php')) {
        print"classe";
        require_once "app/systema/model/$class.php";
        return true;
    } elseif (file_exists("app/classes/db/$class" . '.php')) {
        print"classe";
        require_once "app/classes/db/$class.php";
        return true;
    } elseif (file_exists("app/classes/consulta/$class" . '.php')) {
        print"classe";
        require_once "app/classes/consulta/$class.php";
        return true;
    } elseif (file_exists("app/classes/$class" . '.php')) {
        print"classe";
        require_once "app/classes/$class.php";
        return true;
    } elseif (file_exists("app/classes/Compomentes/$class" . '.php')) {
        print"classe";
        require_once "app/classes/Compomentes/$class.php";
        return true;
    }
}
