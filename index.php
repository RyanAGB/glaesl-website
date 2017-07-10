<?php 
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);

define('APP_RAN', 0);
require_once('includes/functions.php');

$page = getUriSegment(1);

$file = 'template/'.$page.'.php';
if (!strlen($page)) {
	$page = 'home';
} else if (!file_exists($file)) {
	$page = 'error';
}

include_once('includes/header.php');
include_once('template/'.$page.'.php');
include_once('includes/footer.php');
 ?>