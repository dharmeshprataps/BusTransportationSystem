<html>
<head>
<title>template</title>
<link rel="stylesheet" type="text/css" href="mainpage2.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
	.address{text-align: center;}
	.para{margin-right: 40%;}
	.column {
    float: right;
    width: 50%; 
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body >
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
<font style="color:white;font-family: caviar;">
<font style="text-align: center;font-size:150%;"><h1>THE STORY OF US</h1></font>
	<font style="text-align: left;font-size:150%;"><br><br>
	<p class="para"> We are a close team of creative professionals . We are passionate about partnering with good people and organizations to provide exceptional services.</p><br>
	<br>
	<br>
	<address>
		<h1 class="address">'We Provide Comfort To Your Travel experience!'<h1> 
	</address>

<div>
  <img class="mySlides" src="11.jpg" width=100% height="100%">
  <img class="mySlides" src="21.jpg" width=100% height="100%">
  <img class="mySlides" src="31.jpg" width=100% height="100%">
  <img class="mySlides" src="41.jpg" width=100% height="100%">
  <img class="mySlides" src="51.jpg" width=100% height="100%">
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

<h2>WHAT WE DO?</h2>
<p class="para"><cite>We ,The Delhi Bus Corporation a joint venture of Delhi NCT govt and JIIT, provide bus transportation service in DELHI.We also provides jobs for the post of Conductor and Driver for our Buses.</cite></p>
<img src="11.jpg" align="left" width="700px" height="350px"><p><h2>WHY WE DO IT?</h2><br><p>To provide a comfortable and secure journey to our every passenger.</p></p>
<br><br>

 <div ><br><br><br><br><h2>&nbsp &nbsp &nbsp &nbsp &nbsp <u> OUR STANDARDS</u></h2>
  			<p>1.Make it Better &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     2.Keep it Reasonable<br>
3.People Over Profits    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp      4.Keep it Simple<br>
5.Never cheat   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   6.Quality Over Quantity<br>
7.Work to Live  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp          8.open to user
</p></div>

  <br><br><br>
  
<font style="text-align: center;"><address><h1>Our core standards serve as the foundation of behaviors that drive us.<h1></address></font>
</body>
</html>
