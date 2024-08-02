<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $edit = "UPDATE departments SET name='$name' WHERE id=$id ";
    $res = mysqli_query($con, $edit);
    if ($res) {

        header('location:department_table.php');
    } else {
        echo ("not");
    }
}
?>