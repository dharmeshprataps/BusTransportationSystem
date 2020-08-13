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
<h2 align="center">REGISTER PLEASE!!</h2>
<script type="text/javascript">


function thnx()
{
if(document.form.email.value==""||document.form.password.value==""||document.form.fname.value==""||document.form.lname.value==""||document.form.user.value=="")
{
	alert('feild is empty');
	return false;
}
else if(document.form.password.value!=document.form.password1.value)
{
alert("PASSWORD DOESN'T MATCH");
document.form.password.value="";
document.form.password1.value="";
return false;
}
else{
alert('THANKS FOR REGISTERATION');
return true;
}
}

</script>
<div id="form">
	<form name="form" id="form" method="post" action="bus.php" >
			<label>Name</label>:<input type="text" maxlength="20" name="fname" id="fname" autocomplete="on" required ><br/>
			<label>UserId</label>:<input type="number" maxlength="10" id="user" name="user" required ><br/>
			<label>Aadhar</label>:<input type="number" maxlength="10" id="aadhar" name="aadhar" required ><br/>
			<label>Mobile</label>:<input type="number" name="mobile" id="mobile" maxlength="10" ><br>
			<label>Email</label>:<input type="email" name="email" id="email" required ><br>
			<label>Password</label>:<input type="password" name="password" id="password" required >
			<label>Confirm Password</label>:<input type="password" name="password1" id="password1" required ><br/>
			<label>Age</label>:<input type="text" name="age" id="age" value="18" min="16" max="99">
			<br><br>
			<input type="submit" value="submit" onclick="thnx()" >
		
		
		
	</form>
	</div>
	
	<footer>
	<a href="index.html">EXIT</a>
</footer>

</body>
</html>