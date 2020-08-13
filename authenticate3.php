<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$message=0;
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","delhimetro");
	$result = mysqli_query($conn,"SELECT * FROM users WHERE admin_id='" . $_POST["adminid"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = 0;
	} else {
		$message = 1;
	}
}
?>
<script>
		var s=<?php echo $message?>;
		
		if(s){
			window.location.href = "userlogin.php";
		}
		else{
			window.location.href = "showdetails.php";
			alert("error");
		}
</script>

</body>

</html>