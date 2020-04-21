<?php

include_once('templates/header.php');

if(!isset($_GET['p'])) {
	include_once('daftar.php');
} else {
	if($_GET['p'] == 'daftar') {
		include_once('daftar.php');
	} elseif($_GET['p'] == 'masuk') {
		include_once('masuk.php');
	}
}

include_once('templates/footer.php');