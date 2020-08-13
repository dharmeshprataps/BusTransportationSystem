<html>
<head>
<style type="text/css">
	label{
		color: blue;
		margin: solid black 3px;
		padding : 5px;
	}	
	footer{clear:both;
	text-align:center;
	padding:20px;
	background:url('emoji.jpg');
	margin:10px;
	margin-top:12%;
	margin-left:45%;
	margin-right:45%;
	border:2px dashed green;}
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
						margin-left:45px;
						margin-right:50%;
						
						}
		h2{color:yellow;
			border:2px dashed yellow;
			margin:10px;
			
		padding:5px;
			background:url('emoji.jpg')}
		input:focus {border: 3px solid #555;}
		body{background:url('emoji.jpg');
			color:red;
			font-family:100px bold;}
		
	</style>
</head>
<body>
	<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">
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
	$num=$_POST["from"];
	$num3=$_POST['to'];
	$num1=(string)$num;
	$num2=(string)$num3;
	$sql="select * from distance where initial='$num1' and final='$num2';";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
					{
						echo "INITIAL POINT -> ".$row["initial"]. "<br>" . 
                             "FINAL POINT -> ".$row["final"]. "<br>" . 
                             "DISTANCE -> ".$row["distance"]. "<br>". 
                             "PRICE -> ".$row["price"]. "<br>";
                        $yy=$row["route_id"];
                        $price=$row['price'];
                        $pql="select * from route where route_id=$yy;";
                        $les=mysql_query($pql,$conn);
						$busid;
							while($aow=mysql_fetch_array($les))
								{
									echo "bus passing on this route   "."<br>";
									echo $aow["bus_no"]."<br>";
									$busid=$aow["bus_no"];
									$oql="INSERT INTO ticket 
                      VALUES ('$_POST[from]',
                             '$_POST[to]',
                             '$_POST[userid]',
                             '$_POST[date]',
                             '$busid','$price')";
            if (!mysql_query($oql,$conn))die('Error: ' . mysql_error());

									break;
								}
						
						}
	}
	echo "ticket booked";
	?>
</font>
<script type="text/javascript">
	window.setTimeout(abc, 7000);
	function abc(){window.location.href = 'user.php';}
</script>
</body>
</html>