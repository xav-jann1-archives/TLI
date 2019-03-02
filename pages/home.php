<?php

$data['lang'] = $_GET['lang'];
$tpl->assign('data', $data);

// display template
display_all('head', 'header', 'footer');

?>