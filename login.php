<?php

$con = mysqli_connect("localhost", "root", "", "blackboard")or die(mysqli_connect_error($con));
session_start();

$mail=$_POST['mail'];

$mail=mysqli_real_escape_string($con,$mail);


$pass = $_POST['pass'];
$pass = mysqli_real_escape_string($con, $pass);
$pass = MD5($pass);

$query = "SELECT * FROM user_data WHERE mail= '$mail' AND pass= '$pass '";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
if(mysqli_num_rows($result)>0)
{
	header('location: index.html');
}
else
{
/*
?>	<script>
	alert("Username or pass is incorrect");
	</script>
*/  $message = "Username or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
















<?php


/*

if($result>0)
{
echo "Helldblo";
while ($row = mysql_fetch_assoc($result)) {
echo $row['user_id'];
echo $row['name'];
echo $row['mail'];
echo $row['pass'];
echo $row['contact'];
}
}

 echo"CHUP";

while($row = fetch_assoc($result)) {
    echo $row['column_name']; //Print a single column data
    echo print_r($row);       // Print the entire row data
}

$num = mysqli_num_rows($result);

if ($num!= 0) {
 // $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  //header('location: login_demo.php?error=' . $error);
	?>
	<script>
	alert("Username or pass is incorrect");
	</script>
<?php
header('location: login.html');
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['mail'] = $row['mail'];
  $_SESSION['user_id'] = $row['user_id'];
 // echo "User Logged in";
  header('location: index.html');
}
*/
?>

