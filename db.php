<?php
$servername = "localhost";
$username = "idoctor1_bot";
$password = "MERCADOR2002am@";
$dbname = "idoctor1_bot";
// Enter your host name, database username, password, and database name.
// If you have not set database password on localhost then set empty.
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
