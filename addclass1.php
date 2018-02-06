<?php 
require "MyDb.php";
$db = new MyDb();

$email = $_COOKIE['email'];
$id = $_COOKIE['id'];

$name = $_POST['name']; 
$key=$_POST['key'];

$result = $db->addclass($name,$key,$id);
if ($result) {
	header("location:addclass.php" );
}

?>