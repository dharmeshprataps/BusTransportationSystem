<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
 
$con = mysql_connect($hostname, $username, $password) ;
if (!$con){ die('Could not connect: '. mysql_error());}

$dbName="delhimetro";
$db = mysql_select_db($dbName,$con);
$a=$_POST["userid"];

	$sql = "SELECT * FROM user WHERE user_id=$a";
	$result=mysql_query($sql);
	
	$row =mysql_fetch_array($result);
	//echo($_POST['password']);
	$res=$row['password'];
	if($res!=$_POST['password']) {
		echo "<script>window.location.href = 'login.php';</script>";
	} else {
		echo "<script>window.location.href = 'user.php';</script>";
	}
?>
</body>

</html>