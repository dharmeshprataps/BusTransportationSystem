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
	<?php
	if($_POST){
				$a=$_POST['userid'];
				echo "<font style='font-size:100%;color:white'>";
				$conn=mysqli_connect("localhost","root","");
				if($conn->error==NULL)
				{}
				else
					echo "connection failed";
				$sql="use delhimetro;";
				$conn->query($sql);
				
				echo "</font>";
			}
	?>
	<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">
		User Id: 
			<?php 
			if($_POST)
				echo $a;
			?><br>
		INFORMATION of BOOKED TICKETS:<br><br>
		
	<?php
			if($_POST)
			{
				$sql="select * from ticket where user_id=$a;";
				$res=$conn->query($sql);
				if($res->num_rows>0)
				{
					while($row=$res->fetch_assoc())
					{
						echo "FROM -> ".$row["initial"]. "<br>" . 
                             "TO -> ".$row["final"]. "<br>" . 
                             "DATE OF JOURNEY -> ".$row["dat"]. "<br>". 
                             "BUS NUMBER -> ".$row["bus_no"]. "<br>" . 
                             "PRICE -> ".$row["price"]."<br><br>";

					}
				}
				else
				{
					echo "NO TICKETS BOOKED ";
				}
			}
 
	?>
</font>
</body>
</html>
