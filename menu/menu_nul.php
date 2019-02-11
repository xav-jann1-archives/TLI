<?php
    require("/usr/local/lib/smarty/libs/Smarty.class.php");
    $tpl = new Smarty();

	$tpl->setTemplateDir('/usr/local/lib/smarty/templates/');
	$tpl->setCompileDir('/usr/local/lib/smarty/templates_c/');
	$tpl->setConfigDir('/usr/local/lib/smarty/configs/');
	$tpl->setCacheDir('/usr/local/lib/smarty/cache/');

    $machin = array('Ben','Tom','Estelle','Xavierlegrosbg');

    $tpl->assign('liste', $machin);

    $tpl->display("menu_nul.tpl");
	
?>  
