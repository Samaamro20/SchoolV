<?php 
require "MyDb.php";
$db = new MyDb();

$name = $_POST['name'];
$password =$_POST['password'];
$info=$_POST['info'];
$email=$_POST['email'];
$type=$_POST['type'];
$level=$_POST['level'];

$result = $db->adduser($name,$password,$info,$email,$type,$level);
if ($result) {
	
	header("location:index.php" );
}

 ?>