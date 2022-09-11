<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'session');
$name=$_POST['user'];
$pass=$_POST['password'];
$q=" SELECT * from signup where name ='$name' and password='$pass'";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['username']=$name;
    header('location:home.php');
}
    
else{
    
    header('location:sign-up.php');
    echo"<script>alert('Please register yourself')</script>";
}
mysqli_close($con);
?>
