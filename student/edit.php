<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $edit = "UPDATE users SET f_name='$f_name',m_name='$m_name',l_name='$l_name',email='$email',dob='$dob',gender='$gender',phone_no='$phone_no',address='$address' WHERE id='$id' ";
    $res = mysqli_query($con, $edit);
    if ($res) {

        header('location:personal_info.php');
    } else {
        echo ("not");
    }
}
?>