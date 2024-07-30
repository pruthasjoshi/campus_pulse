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
    $role =$_POST['role'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $year_of_study=$_POST['year_of_study'];
    if ($role == 'Student') {
        $role_id = 1;
    }
    if ($role == 'Teacher') {
        $role_id = 2;
    }
    if ($role == 'Admin') {
        $role_id = 3;
    }

    $edit = "UPDATE users SET f_name='$f_name',m_name='$m_name',l_name='$l_name',email='$email',role_id = '$role_id',dob='$dob',gender='$gender',phone_no='$phone_no',address='$address',year_of_study='$year_of_study' WHERE id='$id' ";
    $res = mysqli_query($con, $edit);
    if ($res) {

        header('location:users.php');
    } else {
        echo ("not");
    }
}
?>