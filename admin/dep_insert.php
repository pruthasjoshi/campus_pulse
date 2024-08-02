<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';
ob_start();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
}
$qry = "INSERT INTO departments VALUES($id,'$name');";
if(mysqli_query($con,$qry))
{
    header('location:department_table.php');
}
else{
    echo"not";
}
$content=ob_get_clean();
include __DIR__.'/../layout/app_layout2.php';
?>