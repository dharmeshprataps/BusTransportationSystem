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
			<li><a href="adminlogin.php">Admin login</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="login.php">User Login</a></li>
		</ul>
	</nav>
</div>

<div>
  <img class="mySlides" src="11.jpg" width=100%>
  <img class="mySlides" src="21.jpg" width=100%>
  <img class="mySlides" src="31.jpg" width=100%>
  <img class="mySlides" src="41.jpg" width=100%>
  <img class="mySlides" src="51.jpg" width=100%>
</div><br>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}

</script>



<div style="border-left: 2%;width:80%;height:40px;background:#ffffff;margin-left: 10%;margin-right: 10%;border-radius: 5PX">
	<div  style="margin-left:0px;float:left;border:2%;height:40px;border-radius:5px;z-index:2;overflow:hidden;background-color:#111; width: 18%;padding:10px;" ><font color="white"> &nbsp &nbsp&nbspIMPORTANT NOTICE: </font>
	</div>

	<div class="marquee">
		<marquee>this is notice board</marquee>
	</div>
</div>
<br><br><br>
<div style="margin-left:-2%;margin-right:9%;">
	<div style="">
		<div class="block" style="width:56.5%">
<!-- Space for search tabs-->
			<div style="margin:2%;height:96%;border-radius:5px;background-color: grey">
				<div style="background-color:#333;width:100%;height:30px;">
					<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">TICKETS</font>
				</div>
	<div id="form">
	<form name="form" id="form" method="post" action="ticket.php"  >
			<label>USER ID</label>:<input type="number" name="userid" id="userid" autocomplete="on" required ><br/>
			<label>FROM</label>:<input type="text" name="from" id="from" autocomplete="on" required ><br/>
			<label>TO</label>:<input type="text"  id="to" name="to" required ><br/>
			<label>DATE OF JOURNEY</label>:<input type="date" id="date" name="date" required ><br/>
			

			<br><br>
			<input type="submit" value="submit" >

		
	<br><br><br><b>SHOW TICKET DATA-></b>
	</form>
	<form action="authenticate4.php" method="post" name="form"><br>
		<label>USER ID</label>:<input type="number" name="userid" id="userid" autocomplete="on" required ><br/>
		<label>PASSWORD</label>:<input type="password" name="password" id="password" required ><br/>
		<input type="submit" name="booking" value="booked history">
		
	</form>
	</div>

	
	<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">


</body>
</html>