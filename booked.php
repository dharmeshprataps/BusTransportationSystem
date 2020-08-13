<!DOCTYPE html>
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
<style type="text/css">
label{	font-family: bold;
		color: blue;
		margin: solid black 3px;
		padding : 5px;
	}	
	input[type=date]	{
							
						padding: 8px 20px;
						margin: 8px ;
						margin-bottom:10px;
						margin-left:50px;
						border: 2px solid lightblue;
						border-radius: 2px;}
		input[type=password]{
							width: 25%;
						padding: 8px 20px;
						margin: 8px 0;
						margin-left:50px;
						border: 2px solid  red;
						border-radius: 2px;
		}
		input[type=number]{
							width: 25%;
						padding: 8px 20px;
						margin: 8px 0;
						margin-left:65px;
						border: 2px solid  green;
						border-radius: 2px;
		}
		input[type=email]	{
							width: 25%;
						padding: 8px 20px;
						margin: 8px 0;
						margin-left:56px;
						border: 2px solid  blue;
						border-radius: 2px;
							}
		input[type=text] {
						width: 25%;
						padding: 8px 20px;
						margin: 8px 0;
						border: 2px solid  yellow;
						border-radius: 2px;
						margin-left:95px;
						margin-right:50%;
						
						}
		input:focus {border: 3px solid #555;}
		
		
</style>
</head>
<body>

<div>
	<nav class="floating-head">
		<img src="delhi-metro-logo-6351.png" align= "left" width=100px height=100px>
		<img src="helpline1.png" width=200px height=100px align="right">
		<font style="font-size:250%; color:black;font-family: caviar;text-align: left;padding: 10px">DELHI BUS CORPORATION</font><br>
		<font style="font-size:100%; color:black;font-family: caviar-light; text-align: left;padding: 10px">(An Joint Venture Of Govt. Of INDIA And Govt. Of NCT DELHI)</font>
	</nav>
</div>

<div class="tab">
	<nav>
		<ul>
			<li><a class="active" href="mainpage2.php">HOME</a></li>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			
		</ul>
	</nav>
</div>
<?php
$message=0;
if(count($_POST)>0) {
$hostname = "localhost";
$username = "root";
$password = "";
 
$conn = mysql_connect($hostname, $username, $password) ;
if (!$conn){ die('Could not connect: '. mysql_error());}

$dbName="delhimetro";
$db = mysql_select_db($dbName,$conn);
	$num=$_POST["userid"];
	$sql="select * from ticket where user_id='$num' ;";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
					{
						echo "INITIAL POINT -> ".$row["initial"]. "<br>" . 
                             "FINAL POINT -> ".$row["final"]. "<br>" . 
                             "DATE OF JOURNEY -> ".$row["dat"]. "<br>". 
                             "BUS NUMBER -> ".$row["bus_no"]. "<br>".
                             "PRICE -> ".$row["price"];
                       }
?>
</body>
</html>