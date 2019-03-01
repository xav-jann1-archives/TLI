<?php
session_start();

include_once("./class/Template.class.php");

$template = new Template();

$time_end = microtime_float();
$time = $time_end - $time_start;

echo "<!-- Execution time : ".$time." -->";

?>