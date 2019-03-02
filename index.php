<?php

session_start();

include_once "config.php";

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$time_start = microtime_float();
//Database gest
include_once CLASS_DIR."/Database.class.php";
$DB = new DB();

//Smarty
require SOURCE_DIR."/libs/Smarty.class.php";

$tpl = new Smarty();

$tpl->setTemplateDir(SOURCE_DIR.'/smarty/templates/');
$tpl->setCompileDir(SOURCE_DIR.'/smarty/templates_c/');
$tpl->setConfigDir(SOURCE_DIR.'/smarty/configs/');
$tpl->setCacheDir(SOURCE_DIR.'/smarty/cache/');

//page router
require_once "router.php";

$time_end = microtime_float();
$time = $time_end - $time_start;

echo "<!-- Execution time : ".$time." -->";
?>