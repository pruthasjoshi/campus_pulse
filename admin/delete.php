<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
$id=$_GET['id'];
$que="DELETE FROM users WHERE id='$id'";
$res=mysqli_query($con,$que);
if($res)
{
    header('location:users.php');
}else{
    echo"not";
}
?>