<?php 

$con = mysqli_connect("localhost", "root", "", "blackboard")or die(mysqli_connect_error($con));
$pass=$_REQUEST['pass'];
$pass=MD5($pass);
//echo $pass;
$email=$_REQUEST['em'];	
//echo $email;
$result=mysqli_query($con,"SELECT * FROM user_data WHERE mail= '$email'") or die(mysqli_error($con));
//$row=mysqli_fetch_array($result) or die(mysqli_connect_error($con));
//echo $row['pass'];
if(mysqli_num_rows($result)>0)
{
	mysqli_query($con,"update user_data set pass='$pass' where mail='$email'") or die(mysqli_connect_error($con));
	?>
	<script> alert("Succesfully updated");
	</script>
<?php 
}
else
{
?>
	<script>alert("Error!!");
	</script>
<?php
die(mysqli_connect_error($con));
}

?>

