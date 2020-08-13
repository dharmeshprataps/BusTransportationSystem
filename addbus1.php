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

$sql="INSERT INTO bus 
                      VALUES ('$_POST[bus_no]',
                             '$_POST[engine_number]',
                             '$_POST[tyre_company]',
                             '$_POST[driver_name]',
                             '$_POST[conductor_name]')";
            if (!mysql_query($sql,$con))die('Error: ' . mysql_error());
            							echo "1 record added";
     
   mysql_close($con)
   ?>
   <script type="text/javascript">
   	window.location.href = "addbus.php";
   </script>
</body>
</html>