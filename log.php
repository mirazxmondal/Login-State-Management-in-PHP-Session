<?php
require 'connect.php';
$a=$_GET['a1'];
$b=$_GET['a2'];
$sql="select * from user where email='$a' and pwd='$b'";
$c=mysqli_query($conn,$sql); 
$x=mysqli_fetch_array($c);
// Creating a session name and storing in x variable, session is global variable
$_SESSION['FIEM']=$x;
// Array query(Line7) is running or not is checked by this query
if(mysqli_num_rows($c)>0)
{
    header("location:welcome.php?msg=done");
}
else
{
    header("location:login.html?msg=wrongemailorpwd");
}
?>