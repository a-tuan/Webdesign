<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'customer');
$name=$_POST['user'];
$phone_number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password']; 
$repassword=$_POST['repassword'];
$s="select*from usertable where name='$name'";
$result =mysqli_query ($con, $s);
$num=mysqli_num_rows ($result);
if($num>0){

    echo '<script>alert("User name already exist!")</script>';
    echo"<script>window.location='Signup.php'</script>";}
else{
        if ($password !=$repassword){
            echo '<script>alert("Wrong repassword!")</script>';
            echo"<script>window.location='Signup.php'</script>";
        }
        else{

                $reg="insert into usertable (name,phone_number,email,password) values ('$name','$phone_number','$email','$password')";
                mysqli_query ($con, $reg);
                $_SESSION['user']=$name;
                header('location:login.php');               
            }

    }
?>