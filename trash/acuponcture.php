<?php
    require("/var/www/html/TLI/libs/Smarty.class.php");
    $tpl = new Smarty();

	$tpl->setTemplateDir('/var/www/html/TLI/smarty/templates/');
	$tpl->setCompileDir('/var/www/html/TLI/smarty/templates_c/');
	$tpl->setConfigDir('/var/www/html/TLI/smarty/configs/');
	$tpl->setCacheDir('/var/www/html/TLI/smarty/cache/');

    $tpl->display("templates/acuponcture.tpl");
	
?>  
