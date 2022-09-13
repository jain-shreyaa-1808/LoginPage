<?php
session_start();
$con=mysqli_connect('sql213.epizy.com','epiz_32582075','n7LhsDfL8SX');
mysqli_select_db($con,'epiz_32582075_session');
$name=$_POST['user'];
$pass=$_POST['password'];
$pass1=$_POST['cnfpassword'];
if ($_POST['password']!= $_POST['cnfpassword'])
{
    echo '<script type="text/JavaScript"> 
     alert("Please enter  correct details");
     window.location = "sign-up.php";
     </script>';
     
}
else{
$q=" SELECT name from signup where name ='$name'";
$result=mysqli_query($con,$q);
// $num = mysqli_num_rows($result);
$num = mysqli_num_rows($result);
if($num==1)
{
    echo"Already registered please click here to login";
}
else{
    $ins="insert into signup (name,password) values ('$name','$pass')";
    mysqli_query($con,$ins);
}
mysqli_close($con);
// $num=mysqli_num_rows($result);
header("location:login.php");
 }
 
?>
