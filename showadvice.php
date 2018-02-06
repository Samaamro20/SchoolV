<?php 
$id = $_COOKIE['id'];
require 'MyDb.php';
$db = new MyDb();
$result=$db->showadvice($id);
 ?>