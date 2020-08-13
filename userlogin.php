<html>
<head>
	<title>user login</title>
	<link rel="stylesheet" type="text/css" href="userlogin.css">
	<script type="text/javascript">
	function validate()
	{
		var cnum=document.getElementById("cnumber").value;
		var x=document.getElementById("cardnumber");
		if(cnum.toString().length>4 )
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
<div style="border-left: 2%;width:80%;background:#ffffff;margin-left: 10%;margin-right: 10%;border-radius: 5PX">
	<div  style="margin-left:0px;float:left;border:2%;border-radius:5px;z-index:2;overflow:hidden;background-color:#111; width: 18%; height:20px; padding:10px;" ><font color="white"> &nbsp &nbsp&nbspIMPORTANT NOTICE: </font></div>
	<div class="marquee">
		<marquee>this is notice board</marquee>
	</div>
</div>
<br><br>
<div style="margin:30px;margin-right:30px;border:5px;border-radius:5px;z-index:2;overflow:hidden;background-color:#111; width: 95%; height:100%;margin-bottom: 30px; padding:10px;">

	<div style="margin: 30px;background-color:grey;">
			<div style="background-color:#333;width:100%;height:30px;">
				<font style="font-size:150%; color:white;font-family: caviar;text-align: left;"> &nbspUSER LOGIN</font>
			</div>
			<form oninput="validate()" onsubmit="return validate()" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<div style="padding-left:15%;width:90%;align-content: center">
						<font style="font-size:150%;color:white;font-family: caviar;text-align:left;">Enter User Id: 
							<br><br>
							<input type="number" id="cnumber" name="cnumber" style="width:75%;background-color:lightgrey;border-radius: 5px;height:30px; ">
						</font>
						<br><br>
						<p id="cardnumber" style="display:contents;"><font style="color:red">Invalid Card Number: Should Contain 8 Digits only</font></p>
						<br><br>
						<div style="padding-left:55%;width:100%;">
							<input type="submit" Value="GET DETAILS"  style="width:20%;height:30px;border-radius: 3px; background-color:lightgrey">
							<br><br>
						</div>
					</div>
			</form>
	</div>
	<div style="margin:5%">
			
	<?php
	if($_POST){
				$num=$_POST["cnumber"];
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
				echo $num;
			?><br>
		INFORMATION:<br><br>
		
			<?php
			if($_POST)
			{
				$sql="select * from user where user_id=$num;";
				$res=$conn->query($sql);
				if($res->num_rows>0)
				{
					while($row=$res->fetch_assoc())
					{
						echo "user id -> ".$row["user_id"]. "<br>" . 
                             "name -> ".$row["name"]. "<br>" . 
                             "age -> ".$row["age"]. "<br>". 
                             "adhaar -> ".$row["aadhar"]. "<br>" . 
                             "email -> ".$row["email"]. "<br>" .
                             "password -> ".$row["password"]. "<br>" . 
                             "moblie -> ".$row["Mobile"];
					}
				}
				else
				{
					echo "USER DOES NOT EXISTS";
				}
			}
			?>
	</font></div></div>


</body>
</html>