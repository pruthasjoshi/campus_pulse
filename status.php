<?php
require 'vendor/autoload.php';
require 'config/db.php';

$id=$_GET['id'];
$status=$_GET['status'];

$sta=" UPDATE users SET status=$status WHERE id=$id";

mysqli_query($con,$sta);
header('location:users.php');
?>