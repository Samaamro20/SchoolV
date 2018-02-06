<?php
	require 'MyDb.php';
	$db = new MyDb;

	$favs = $db->getAllfav();

	echo $favs;
?>