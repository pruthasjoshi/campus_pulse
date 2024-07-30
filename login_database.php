<?php
ob_start();
session_start();
require 'vendor/autoload.php';
require 'config/db.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['email']=$email;
$que="SELECT * FROM users where email='$email';";
$res=mysqli_query($con,$que);
$total=mysqli_num_rows($res);
if($total==1)
{
    $row=mysqli_fetch_array($res);
    $hashpass=$row['password'];
    $_SESSION['name']=$row['f_name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['role_id']=$row['role_id'];
    $verify=password_verify($password,$hashpass);
    if($verify)
    {
        if($_SESSION['role_id']==1)
        {
            header('location:student/index.php');
        }
        if($_SESSION['role_id']==2)
        {
            header('location:teacher/index.php');
        }
        if($_SESSION['role_id']==3)
        {
            header('location:admin/index.php');
        }
    }
    else{
        $_SESSION['error']="invalid password";
        header('location:login.php');
    }
}
else
{
    $_SESSION['error']="invalid email";
    header('location:login.php');
}
?>