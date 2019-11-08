<?php

$con = mysqli_connect("localhost", "root", "", "blackboard")or die(mysqli_connect_error($con));

if(isset($_POST["submit"]))
{
$title=$_POST['title'];
$filename= rand(1000,1000)."-".$_FILES['file']['name'];
$tempfilename=$_FILES['file']['tmp_name'];
$upload_dir='/opt/lampp/htdocs/ITAPP/uploadfile';
//chown($upload_dir, 0755);
move_uploaded_file($tempfilename,$upload_dir.'/'.$filename);
$sql="insert into upload(filename,Content) values('$title','$filename')";
if(mysqli_query($con,$sql))
{
echo "Successfully Uploaded";
}
else
{
echo "Error!!";
}
}



?>
