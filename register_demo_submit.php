
<?php

//require("includes/common.php");
$con = mysqli_connect("localhost", "root", "", "blackboard")or die(mysqli_connect_error($con));

session_start();

$name=$_POST['name'];
$name=mysqli_real_escape_string($con,$name);

$mail=$_POST['mail'];
$mail=mysqli_real_escape_string($con,$mail);

$pass=$_POST['pass'];
$pass=mysqli_real_escape_string($con,$pass);
$pass=md5($pass);

$contact=$_POST['contact'];
$contact=mysqli_real_escape_string($con,$contact);

//$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
//$regex_num = "/^[789][0-9]{9}$/";

$query = "SELECT * FROM user_data WHERE mail='$mail'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
 //header('location:login.html');
?>
  <script >
    alert("Email ID Already Exists!!");
   </script>
<?php 
header('location:register.html');
}
else {
  $query = "INSERT INTO user_data(name, mail, pass, contact)VALUES('" . $name . "','" . $mail . "','" . $pass . "','" . $contact . "')";
  mysqli_query($con, $query) or die(mysqli_error($con));
  header('location:login.html');
}
?>

