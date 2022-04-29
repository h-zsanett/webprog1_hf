<?php
include('./includes/config.inc.php');

$keres = $pages['/'];
if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./templates/pages/{$pages[$_GET['page']]['fajl']}.tpl.php")) {
		$keres = $pages[$_GET['page']];
	}
	else if (isset($extrak[$_GET['page']]) && file_exists("./templates/pages/{$extrak[$_GET['page']]['fajl']}.tpl.php")) {
		$keres = $extrak[$_GET['page']];
	}
	else { 
		$keres = $hiba_oldal;
		header("HTTP/1.0 404 Not Found");
	}
}

include('./templates/index.tpl.php'); 
?>