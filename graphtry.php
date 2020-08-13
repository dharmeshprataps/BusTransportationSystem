<html>
<head>

</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","");
$sql="use delhimetro";
$conn->query($sql);
?>


	hii there
	 <script type='text/javascript'>
	<?php 
		
					echo"var node= [ ";
								$out=0;
							while($out<248)
							{
								$in=0;
								echo "[ ";
								while($in<247)
								{	
									echo "0,";
									$in++;
								}
								echo"0]";
								if($out<247)
									echo",";
								$out++;
							}
							echo"];";
			$sql="SELECT `code`, `Station_name`, `node1`, `dist1`, `node2`, `dist2`, `node3`, `dist3`, `node4`, `dist4` FROM `table 3` WHERE 1 ;";
				$res=$conn->query($sql);
				if($res->num_rows>0)
				{
					while($row=$res->fetch_assoc())
					{

						if($row["node1"]!=NULL)
						{
							$r=$row['code']-1;
							$c=$row['node1']-1;
							echo "node[".$r."][".$c."]=".$row['dist1'].";";
							echo "\n";
						}
						if($row["node2"]!=NULL)
						{
							$r=$row['code']-1;
							$c=$row['node2']-1;
							echo "node[".$r."][".$c."]=".$row['dist2'].";";echo "\n";
						}
						if($row["node3"]!=NULL)
						{
							$r=$row['code']-1;
							$c=$row['node3']-1;
							echo "node[".$r."][".$c."]=".$row['dist3'].";";echo "\n";
						}
						if($row["node4"]!=NULL)
						{
							$r=$row['code']-1;
							$c=$row['node4']-1;
							echo "node[".$r."][".$c."]=".$row['dist4'].";";echo "\n";
						}

					}
				}


	?>
</script>
	


<script>
	console.log(node);
</script>



</body>