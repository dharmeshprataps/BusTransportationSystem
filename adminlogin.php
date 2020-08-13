<html>
<head>
	<style type="text/css">
		form{
			color: blue;
		}
		body{background:url('emoji.jpg');}
		footer{clear:both;
		text-align:center;
		padding:20px;
		background:url('emoji.jpg');
		margin:10px;
		margin-left:45%;
		margin-right:45%;
		margin-top:32%;
		border:2px dashed green;}
		input[type=text]	{
								width: 25%;
								padding: 8px 20px;
								margin: 8px 0;
								margin-left:56px;
								border: 2px solid  blue;
								border-radius: 2px;
							}
		input[type=password]{
								width: 25%;
								padding: 8px 20px;
								margin: 8px 0;
								margin-left:50px;
								border: 2px solid  red;
								border-radius: 2px;
							}
	</style>
</head>
<body>
<script type="text/javascript">
function login()
{
if(document.form.adminid.value==""||document.form.password.value=="")
{
	alert('feild is empty');
}
}


</script>

	<form name="form" id="form" method="post" action="authenticate2.php">
			Admin Id:<input type="text" name="adminid" id="adminid" required ><br>
			Password:<input type="password" name="password" id="password" required ><br><br><br>
			

			<!--Login Type:<input type="radio" value="Admin" name="login_type" id="login_type"required>Admin      
			<input type="radio" value="User" name="login_type" id="login_type"required>User<br><br><br>
	-->		<input type="submit" value="submit" onclick="login()">
	</form>	

	<footer>
	<a href="MAINPAGE2.php">EXIT</a>
</footer>
</body>
</html>