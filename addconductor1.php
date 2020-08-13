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

$sql="INSERT INTO conductor 
                      VALUES ('$_POST[conductor_id]',
                             '$_POST[conductor_name]',
                             '$_POST[age]',
                             '$_POST[mobile]',
                             '$_POST[adhaar_number]',
                             '$_POST[bus_no]')";
            if (!mysql_query($sql,$con))die('Error: ' . mysql_error());
            							echo "1 record added";
     
   mysql_close($con)
   ?>
   <script type="text/javascript">
   	window.location.href = "adddriver.php";
   </script>
</body>
</html>