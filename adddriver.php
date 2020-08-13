<!DOCTYPE html>
<html>
<head>
	<title></title>
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

	<div id="form">
	<form name="form" id="form" method="post" action="adddriver1.php" >
			<label>DRIVER ID</label>:<input type="number" maxlength="20" name="driver_id" id="driver_id" autocomplete="on" required ><br/>
			<label>ADHAAR</label>:<input type="number" maxlength="10" id="adhaar_number" name="adhaar_number" required ><br/>
			<label>AGE</label>:<input type="number" maxlength="10" id="age" name="age" required ><br/>
			<label>DRIVER NAME</label>:<input type="text" name="driver_name" id="driver_name" maxlength="10" ><br>
			<label>MOBILE</label>:<input type="number" name="mobile" id="mobile" maxlength="10" ><br>
			<label>BUS ALLOTED</label>:<input type="number" name="bus_no" id="bus_no" maxlength="10" ><br>
			<br><br>
			<input type="submit" value="submit" onclick="thnx()" >
		
		
		
	</form>
	</div>

</body>
</html>