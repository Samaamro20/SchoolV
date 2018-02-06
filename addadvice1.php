<?php 
require "MyDb.php";
$db = new MyDb();

$email = $_COOKIE['email'];
$id = $_COOKIE['id'];

$text = $_POST['text']; 

$result = $db->addadvice($text,$id);
if ($result) {
	header("location:addadvice.php" );
}

 ?>