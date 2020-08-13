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
			<div style="margin:2%;height:96%;border-radius:5px;background-color:grey">
				<div style="background-color:#333;width:100%;height:30px;">
					<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">CALCULATE VARIABLES</font>
				</div>
				<br><br>
				<form autocomplete="off" action="find1.php" method="post">
					<div style="padding-left: 5%;width:90%">
						<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">From Station :  
						 		<div class="autocomplete" style="width:100%">
						 			<font style="font-size:70%;font-family:arial;color:black;">
    							<input id="station1" type="text" name="stationname1" style="width:75%;background-color:lightgrey;border-radius: 5px;height:30px; "placeholder="Station"></font>
 							 </div>
						</font>
					</div>
					<br><br>
					<div style="padding-left: 5%;width:90%">
						<font style="font-size:150%; color:white;font-family: caviar;text-align: left;">To Station :&nbsp&nbsp&nbsp  
							<div class="autocomplete">
						 			<font style="font-size:70%;font-family:arial;color:black;">
    							<input id="station2" type="text" name="stationname2" style="width:75%;background-color:lightgrey;border-radius: 5px;height:30px; "placeholder="Station"></font>
 							 </div>
						</font>
					</div>
					
					<div style="padding-left: 5%;width:90%">
					
						<div style="padding-left:70%;width:100%;">
							<input type="submit" Value="SEARCH"style="width:80%;height:30px;border-radius: 3px; background-color:lightgrey"; 		onsubmit="find()">
						</div>
						</font>
					</div>
				</form>



			</div>	
		</div>

		<div class="block">
			<div style="margin: 2%;background-color:grey;">
				<div style="background-color:#333;width:100%;height:30px;">
					<font style="font-size:150%; color:white;font-family: caviar;text-align: left;"> NETWORK MAP</font>
				</div>
				<br>
				<a href="networkmap2.php" ><img src="Mapenglish_0708181.jpg" style="width:100%;height:85%"></a>
			</div>
		</div>
	</div>
	
		


<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var stations = ["Vaishali","Kaushambi","Karkarduma","Nirman Vihar","Laxmi Nagar","Yamuna Bank","Indraprastha","Pragati Maidan","Mandi House","Barakhamba Road"];

autocomplete(document.getElementById("station1"), stations);
autocomplete(document.getElementById("station2"), stations);
autocomplete(document.getElementById("station3"), stations);
</script>


</body>
</html>