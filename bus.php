<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
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

$sql="INSERT INTO user 
                      VALUES ('$_POST[user]',
                             '$_POST[fname]',
                             '$_POST[age]',
                             '$_POST[aadhar]',
                             '$_POST[email]',
                             '$_POST[password]',
                             '$_POST[mobile]')";
            if (!mysql_query($sql,$con))die('Error: ' . mysql_error());
            							echo "1 record added";
     
   mysql_close($con)
   ?>
   <script type="text/javascript">
   	window.location.href = "login.php";
   </script>
</body>
</html>