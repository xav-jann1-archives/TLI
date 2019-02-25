<?php
    require("/usr/local/lib/smarty/libs/Smarty.class.php");
    $tpl = new Smarty();

	$tpl->setTemplateDir('/usr/local/lib/smarty/templates/');
	$tpl->setCompileDir('/usr/local/lib/smarty/templates_c/');
	$tpl->setConfigDir('/usr/local/lib/smarty/configs/');
	$tpl->setCacheDir('/usr/local/lib/smarty/cache/');

    require_once('resources/DB.php');
    
    $db = new DB();

    $query = "SELECT `desc` FROM symptome ORDER BY `desc` ASC";

    $result = $db->requete($query);

    $tpl->assign('liste', $result);

    $tpl->display("templates/pathos.tpl");
	
?>
  
