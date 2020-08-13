<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$message=0;
if(count($_POST)>0) {
	echo "ppppp";

$hostname = "localhost";
$username = "root";
$password = "";
 
$con = mysql_connect($hostname, $username, $password) ;
if (!$con){ die('Could not connect: '. mysql_error());}

$dbName="delhimetro";
$db = mysql_select_db($dbName,$con);
$a=$_POST["adminid"];

	$sql = "SELECT * FROM admin WHERE admin_id=$a";
	$result=mysql_query($sql);
	
	$row =mysql_fetch_array($result);
	//echo($_POST['password']);
	$res=$row['password'];
	if($res!=$_POST['password']) {
		echo "<script>window.location.href = 'adminlogin.php';</script>";
	} else {
		echo "<script>window.location.href = 'admininterface.php';</script>";
	}
}
?>
<script>
		var s=<?php echo $message?>;
		console.log(s);
		/*if(s){
			window.location.href = "admininterface.php";
		}
		else{
			window.location.href = "adminlogin.php";
			alert("error");
		}*/
</script>

</body>

</html>