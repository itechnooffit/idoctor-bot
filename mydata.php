<?php
include("auth_session.php");
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
     <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 98%;
  max-width:600px;
}

td, th {
  border: 1.5px solid white;
  text-align: center;
  padding: 1px;
  color:white;
}
th {
  font-size: 15px;
  background-color: #58aabf;
}
tr:nth-child(even) {
  background-color: black;
}
</style>
</head>
<body>
<p>Hey, <?php echo $_SESSION['username']; ?>!</p>
<p><a href="logout.php">Logout</a></p>
<?php 
		if (!isset($_POST['submit1'])) { 
	?> 
		<form action = "" method = "post"> 
			
			<table> 
			<tr> 
				<td style = " border-style: none;"></td> 
				<td bgcolor = "lightgreen" style = "font-weight: bold"> 
				Enter unClient id:
				</td> 
				
				<td bgcolor = "lightred"> 
					<input type = "text" style = "width: 160px;"
					class = "form-control" name = "rem" id = "rem" /> 
				</td> 
				
				<td bgcolor = "lightgreen" colspan = "2"> 
					<input type = "submit" name = "submit1"
						value = "Block" /> 
				</td> 
			</tr> 
			</table> 
		</form> 
	<?php 
		} 
		else { 
			blocking(); 
			
		} 
	?> 
<?php
    require('db.php');
if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $credits    = stripslashes($_REQUEST['credits']);
        $credits    = mysqli_real_escape_string($con, $credits);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
         if(!empty($email&&$credits&&$password)) {
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `Clients` (username, password, TID, Credits, reg_date)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$credits', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>$username registered successfully.</h3><br/>
                  </div>";
			echo "<meta http-equiv='refresh' content='2'>";
        } 
        }
        else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
                  echo "<meta http-equiv='refresh' content='2'>";
        }
    } 
        
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Telegram id">
        <input type="text" class="login-input" name="credits" placeholder="Credirs to be Added">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        
    </form>
</body>
</html>


<?php 
function adding() {} 

function createDirectory() { 
	//	$add = $_POST["add"]; 
	//	$dst= "itechnewbot/$add/";
	//	$src= "itechnewbot/testme/";
		// mkdir($dst); 
// recurse_copy($src, $dst);
	} 

function recurse_copy($src,$dst) {
$dir = opendir($src);
@mkdir($dst);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($src . '/' . $file) ) {
recurse_copy($src . '/' . $file,$dst . '/' . $file);
}
else {
copy($src . '/' . $file,$dst . '/' . $file);
}
}
}
closedir($dir);
}
	
?> 
<?php 
function blocking() { 
$rem = $_POST["rem"]; 
include("mysql.php");
$sql = new MySQL();
$sql->query("DELETE FROM Clients WHERE TID='$rem' LIMIT 1");
			echo "User $rem removed"; 
			echo "<meta http-equiv='refresh' content='2'>";
	} 
?> 
<?php
include('db.php'); 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID, username, TID, Credits, reg_date FROM Clients";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table>\n";
echo "  <tr>\n";
echo "    <th>ID</th>\n";
echo "    <th>Name</th>\n";
echo "    <th>TID</th>\n";
//echo "    <th>Password</th>\n";
echo "    <th>Credits</th>\n";
echo "    <th>Created</th>\n";
echo "  </tr>\n";
while($row = $result->fetch_assoc()) {
echo "  <tr>\n";
echo "    <td>".$row["ID"]."</td>\n";
echo "    <td>". $row["username"]. "</td>\n";
echo "    <td>". $row["TID"]. "</td>\n";
//echo "    <td>". $row["password"]. "</td>\n";
echo "    <td>". $row["Credits"]. "</td>\n";
echo "    <td>" . $row["reg_date"] . "</td>\n";
echo "  </tr>\n";
    }
echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>