<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
$id=$_GET['id'];
$que="DELETE FROM departments WHERE id='$id'";
$res=mysqli_query($con,$que);
if($res)
{
    header('location:department_table.php');
}else{
    echo"not";
}
?>