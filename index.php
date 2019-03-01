<?php
session_start();

$page = "home";

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function pageSelect()
	{
		if (isset($_GET["page"]))
		{
            global $page;
			$page = ctype_alpha($_GET["page"]) ? strtolower($_GET["page"]) : '404';
            $page = file_exists("pages/".$page.".tpl") ? $page : "404";
		}
	}

$time_start = microtime_float();

include_once("class/Database.class.php");
require("/var/www/html/TLI/libs/Smarty.class.php");

pageSelect();

$tpl = new Smarty();

$tpl->setTemplateDir('/var/www/html/TLI/smarty/templates/');
$tpl->setCompileDir('/var/www/html/TLI/smarty/templates_c/');
$tpl->setConfigDir('/var/www/html/TLI/smarty/configs/');
$tpl->setCacheDir('/var/www/html/TLI/smarty/cache/');

$tpl->assign('page', $page);
$tpl->display("frame.tpl");

$time_end = microtime_float();
$time = $time_end - $time_start;

echo "<!-- Execution time : ".$time." -->";
?>