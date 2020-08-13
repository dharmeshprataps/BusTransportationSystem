<html>
<head>
<title>template</title>
<link rel="stylesheet" type="text/css" href="mainpage2.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
	function validate()
	{
		var cnum=document.getElementById("cnumber").value;
		var x=document.getElementById("cardnumber");
		if(cnum.toString().length==8)
		{
			if(!isNaN(cnum))
			{	
				x.style.display="none";
				return true;
			}
			else
			{
				x.style.display="contents";
				return false;
			}
		}
		else
		{
			x.style.display="contents";
			return false;
		}
		return false;
	}
</script>
</head>
<body>
	<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">
<div>
	<nav class="floating-head">
		<img src="delhi-metro-logo-6351.png" align= "left" width=100px height=100px>
		<img src="helpline.png" width=200px height=100px align="right">
		<font style="font-size:250%; color:black;font-family: caviar;text-align: left;padding: 10px">DELHI BUS CORPORATION</font><br>
		<font style="font-size:100%; color:black;font-family: caviar-light; text-align: left;padding: 10px">(An Joint Venture Of Govt. Of NCT DELHI and JIIT)</font>
	</nav>
</div>
<div class="tab">
  <nav>
    <ul>
      <li><a class="active" href="mainpage2.php">HOME</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="adminlogin.php">Admin login</a></li>
      <li><a href="contact.php">CONTACT</a></li>
      <li><a href="login.php">User Login</a></li>
    </ul>
  </nav>
</div>

<?php
	
$hostname = "localhost";
$username = "root";
$password = "";
 
$conn = mysql_connect($hostname, $username, $password) ;
if (!$conn){ die('Could not connect: '. mysql_error());}

$dbName="delhimetro";
$db = mysql_select_db($dbName,$conn);
<font style="font-size:150%; color:white;font-family: caviar;text-align: left;"> 
if($_POST)
			{	$num1=$_POST["stationname1"];
				$num2=$_POST['stationname2'];
				$sql="select * from distance where initial=$num1 and final=$num2;";
				$res=mysql_query($sql,$conn);
					
					while($row=mysql_fetch_array($res,$conn))
					{
						echo "INITIAL POINT -> ".$row["initial"]. "<br>" . 
                             "FINAL POINT -> ".$row["final"]. "<br>" . 
                             "DISTANCE -> ".$row["distance"]. "<br>". 
                             "PRICE -> ".$row["price"]. "<br>";
                        $yy=$row["route_id"];
                        $pql="select * from route where route_id=$yy;";
                        $les=mysql_query($pql,$conn);
						
							while($aow=mysql_fetch_array($les,$conn))
								{
									echo "bus passing on this route";
									echo $aow["bus_no"]."<br>";
								}
						}
					}
			
?>
	
		
			
</body>
</html>