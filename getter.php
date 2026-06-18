<?php 
header('Content-type: text/html; charset=utf-8');
include("mysql.php");
$sub = $_GET['sub'];
$tid = $_GET['tid'];
$crd = $_GET['crd'];

if ($tid !== ''){
$sql = new MySQL();
$sql->query("SELECT *FROM Clients WHERE TID='$tid' LIMIT 1");
$result = $sql->get();
if(count($result) == 1){
 echo $id= $result[0]['TID'];
  //  $crd= $result[0]['Credits'];
   // $pss= $result[0]['password'];
   // echo  nl2br ("$user \n $crd \n $pss");
} else {
    echo "";
}
}

if ($sub !== ''){
$sql = new MySQL();
$sql->query("SELECT *FROM Clients WHERE TID='$sub' LIMIT 1");
$result = $sql->get();
if(count($result) == 1){
 echo   $user= $result[0]['username'];
  //  $crd= $result[0]['Credits'];
   // $pss= $result[0]['password'];
   // echo  nl2br ("$user \n $crd \n $pss");
} else {
    echo "";
}
}
if ($crd !== ''){
$sql = new MySQL();
$sql->query("SELECT *FROM Clients WHERE Credits='$crd' LIMIT 1");
$result = $sql->get();
if(count($result) == 1){
 echo   $user= $result[0]['TID'];
  //  $crd= $result[0]['Credits'];
   // $pss= $result[0]['password'];
   // echo  nl2br ("$user \n $crd \n $pss");
} else {
    echo "";
}
}
 
?>