<?php
session_start();
require 'vendor/autoload.php';
require 'config/db.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone_no'];
    $edit = "UPDATE users SET f_name='$f_name',m_name='$m_name',l_name='$l_name',email='$email',gender='$gender',phone_no='$phone_no' WHERE id='$id' ";
    $res = mysqli_query($con, $edit);
    if ($res) {

        header('location:users.php');
    } else {
        echo ("not");
    }
}
?>