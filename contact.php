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
	<div>
	<nav class="floating-head">
		<img src="delhi-metro-logo-6351.png" align= "left" width=100px height=100px>
		<img src="helpline1.png" width=200px height=100px align="right">
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





<br>
		
			
					<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">CONTACTS</font>
				</div>
				<br><br>
				<form autocomplete="off" action="find1.php" method="post">
					<div style="padding-left: 5%;width:90%">
						<font style="font-size:100%; color:white;font-family: caviar;text-align: center;">  
						 	<h3>DHARMESH P.SINGH</h3>
						 	<h3>Mobile:XXX...XXX</h3>
						 	<h3>Email: dharmesh@gmail.com</h3>
						 	<marquee>--------</marquee><br>
						 	<h3>ISHAN JAIN</h3>
						 	<h3>Mobile: YYY...YYY</h3>
						 	<h3>Email: ishan@gmail.com</h3>
						 	<marquee>--------</marquee><br>
						 	<h3>ANMOL KUMAR</h3>
						 	<h3>Mobile: ZZZ...ZZZ</h3>
						 	<h3>Email: anmol@gmail.com</h3>		
 							 </div>
						</font>
					</div></form></div>

</body>
</html>