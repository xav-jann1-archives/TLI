<?php
    require("/usr/local/lib/smarty/libs/Smarty.class.php");
    $tpl = new Smarty();

	$tpl->setTemplateDir('/usr/local/lib/smarty/templates/');
	$tpl->setCompileDir('/usr/local/lib/smarty/templates_c/');
	$tpl->setConfigDir('/usr/local/lib/smarty/configs/');
	$tpl->setCacheDir('/usr/local/lib/smarty/cache/');

    require_once('resources/DB.php');
    
    $db = new DB();

    $query = "SELECT patho.desc, symptome.desc 
    FROM symptome
    JOIN symptPatho ON symptome.idS = symptPatho.idS
    JOIN patho ON patho.idP = symptPatho.idP
    ORDER BY patho.desc ASC";

    $result = $db->requete($query);


    $tpl->assign('tableau', $result);


    $tpl->display("templates/pathos.tpl");
?>
  
