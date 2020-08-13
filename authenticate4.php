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
		echo "<script>window.location.href = 'user.php';</script>";
	}
?>
<form name="lll" action="showdetails.php" method="POST">
	<input type="text" name="userid" value=<?php echo $_POST['userid']?>>
	<input type="submit" name="" value="submit">
</form>
<script type="text/javascript">
	document.forms['lll'].submit();
</script>
</body>

</html>