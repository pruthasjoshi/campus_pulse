<?php
ob_start();
session_start();
require 'vendor/autoload.php';
require 'config/db.php';

// if(isset($_POST['login']))
// {
//     $username=$_POST['username'];
//     $password=$_POST['password'];

//     if($con->connect_error)
//     {
//         die("connection failed:".$con->connect_error);
//     }
//     $que="SELECT * FROM login where username='$username' and password='$password'";
//     $res=mysqli_query($con,$que);
//     if($res->num_rows==1)
//     {
//         header('location:index.php');
//         exit();
//     }
//     else{
//         exit();
//     }
// }
$email = $_POST['email'];
$password = $_POST['password'];
$que="SELECT * FROM users where email='$email';";
$res=mysqli_query($con,$que);
$total=mysqli_num_rows($res);
if($total>=1)
{
    $row=mysqli_fetch_array($res);
    $hashpass=$row['password'];
    $_SESSION['name']=$row['f_name'];
    $verify=password_verify($password,$hashpass);
    if($verify)
    {
        $_SESSION['email']=$email;
    header('location:index.php');
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
<!-- <script type="text/javascript">
            alert("wrong username or password");
            window.open("index.php","_self");
            </script> -->