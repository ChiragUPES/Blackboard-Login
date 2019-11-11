<?php 
$mail=$_POST['mail'];
$pass=$_POST['pass'];
if($mail=='abc123@gmail.com' && $pass=='qwer')
{
	header('location:faculty.html');
}
else
{
	echo"Username or pass is incorrect";
}


?>
