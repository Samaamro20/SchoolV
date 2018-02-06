<<?php 
require "MyDb.php";
$db = new MyDb();

$email = $_COOKIE['email'];
$id = $_COOKIE['id'];
$record_id=$_POST['record_id'];

$res=$db->addfav($record_id,$id);


 ?>