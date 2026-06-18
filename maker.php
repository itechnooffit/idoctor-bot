<?php 
include("mysql.php");
$create_datetime = date("Y-m-d H:i:s");
$iden = $_GET['id'];
$pass = $_GET['pw'];
$sql = new MySQL();
$sql->query("INSERT INTO datas VALUES(NULL,'$iden','$pass','$create_datetime')");
?>