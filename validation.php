<?php
session_start();
$con=mysqli_connect('sql213.epizy.com','epiz_32582075','n7LhsDfL8SX');
mysqli_select_db($con,'epiz_32582075_session');
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
    echo"<script>alert('Please register yourself')</script>";
    $URL="http://logintest.rf.gd/sign-up.php";
    echo ("<script>location.href='$URL'</script>");

    
}
mysqli_close($con);
?>
//infinityfree
