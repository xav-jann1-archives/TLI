<?php

// concrete page
$page = isset($_GET['page']) ? $_GET['page'] : DEF_PAGE;
$lang = isset($_GET['lang']) ? $_GET['lang'] : DEF_LANG;

function display_all($head, $header, $footer) {
	$tpl = $GLOBALS['tpl'];
	$page = $GLOBALS['page'];
	$lang = $GLOBALS['lang'];
	
	//prepare data sent to tpl
	$data['lang'] = $lang;
	$tpl->assign('data', $data);

	include PAGES_DIR . '/' . GENERIC_DIR . "/$head.tpl";
	$tpl->display(PAGES_DIR . '/' . GENERIC_DIR . "/$header.tpl");
	$tpl->display(PAGES_DIR . '/' . TEMPLATES_DIR . "/$page.tpl");
	$tpl->display(PAGES_DIR . '/' . GENERIC_DIR . "/$footer.tpl");
}

// search if page exist, display 404 if not
if (!file_exists(PAGES_DIR . "/$page.php")) {
	$page = '404';
}

include_once PAGES_DIR . "/$page.php";

?>