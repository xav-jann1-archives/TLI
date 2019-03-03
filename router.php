<?php

// concrete page
$page = isset($_GET['page']) ? $_GET['page'] : DEF_PAGE;
$lang = isset($_GET['lang']) ? $_GET['lang'] : DEF_LANG;

function display_all() {
	$tpl = $GLOBALS['tpl'];
	$page = $GLOBALS['page'];
	$lang = $GLOBALS['lang'];
	
	//prepare data sent to tpl
	$data['lang'] = $lang;
	$data['css'] = STYLE_DIR;
	$tpl->assign('data', $data);
	$tpl->assign('session', $_SESSION);

	include PAGES_DIR . '/' . GENERIC_DIR . "/head.tpl";
	$tpl->display(PAGES_DIR . '/' . GENERIC_DIR . "/header.tpl");
	$tpl->display(PAGES_DIR . '/' . TEMPLATES_DIR . "/$page.tpl");
	$tpl->display(PAGES_DIR . '/' . GENERIC_DIR . "/footer.tpl");
}

// search if page exist, display 404 if not
if (!file_exists(PAGES_DIR . "/$page.php")) {
	$page = '404';
	include PAGES_DIR . "/$page.php";
	$tpl->display(PAGES_DIR . '/' . TEMPLATES_DIR . "/$page.tpl");
	exit;
}

include PAGES_DIR . "/$page.php";
display_all();

?>