<?php
include('db.php');   
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
TID VARCHAR(50) NOT NULL,
password varchar(50) NOT NULL,
Credits VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
$sql2 = "CREATE TABLE Admin (
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  create_datetime datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1";


$sql3 = "CREATE TABLE `makeshortlink` (
  `ID` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `SUB` varchar(10) NOT NULL,
  `URL` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1";


if ($conn->query($sql) === TRUE) {
  echo "Table Clients created successfully \n ";
} else {
  echo "Error creating table: " . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
  echo "Table Admin created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
if ($conn->query($sql3) === TRUE) {
  echo "Table Admin created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>