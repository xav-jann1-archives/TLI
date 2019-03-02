<?php

$data['lang'] = $_GET['lang'];
$smarty->assign('data', $data);

// display template
display_all('head', 'header', 'footer');

?>