<html>
<head>
<title>network map</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="networkmap.css">

<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
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
  <li><a href="adminlogin.php">Admin Login</a></li>
	<li><a href="login.php">User login</a></li>
	<li><a href="contact">CONTACT</a></li>
</ul>
</nav>
</div>
<div style="height:50px;">
<div style="border-left: 2%;width:80%;height:40px;background:#ffffff;margin-left: 10%;margin-right: 10%;border-radius: 5px">
	<div  style="margin-left:0px;float:left;height:40px;border:2%;border-radius:5px;z-index:2;overflow:hidden;background-color:#111; width: 18%; padding:10px;" ><font color="white"> &nbsp &nbsp&nbspIMPORTANT NOTICE: </font></div>
	<div class="marquee" style="height:40px;">
	<marquee>this is notice board</marquee>
	</div>
</div>
</div>
<br>
<div>
<div style="margin:30px;margin-right:30px;border:5px;border-radius:5px;z-index:2;overflow:hidden;background-color:#111; width: 95%; height:150%;margin-bottom: 30px; padding:10px;">
	<div style="margin: 30px;background-color:grey;">
			<div style="background-color:#333;width:100%;height:30px;">
				<font style="font-size:150%; color:white;font-family: caviar;text-align: left;"> NETWORK MAP</font>
			</div>
			<div style="width:100%;height:92%;"
			<a><img id="network-map" src="Mapenglish_07081821.jpg" style="width:100%;height:100%"></a>
			</div>


	</div>
</div>
<script>
	magnify("network-map",3);
</script>
</div>


<br>
<br>

<div style="margin-top:50px;margin-left:0px;float:bottom;z-index:0;overflow:hidden;background-color:#111; width: 94%; height:400px; padding:50px;">
	<font color="white">Support section</font>
</div>
