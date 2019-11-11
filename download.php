<html>
<head>
	<title>Download Content </title>
</head>
<body>
	<h1> Download Content</h1>
	<?php
	$con=mysqli_connect("localhost","root","","blackboard") or die(mysqli_connect_error($con));
	$res=mysqli_query($con,"select * from upload");
	echo "<table>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; ?>
	 <a href="uploadfile/<?php echo $row['Content'];?>"> <?php echo $row['filename'] ?></a>		
		<?php
		//echo $row['Content'];

	}
	echo"</table>";
?>

</body>
</html>

