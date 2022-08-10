<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'customer');
$name=$_POST['user'];
$password=$_POST['password']; 
$s="select*from usertable where name='$name' && password='$password'";
$result =mysqli_query ($con, $s);
$num=mysqli_num_rows ($result);
if($num==1){
    $_SESSION['user']=$name;
    header("Location:Landingpage.php");
}
else{
    header('Location:login.php');
}
?>



