<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';
ob_start();
if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $year_of_study = $_POST['year_of_study'];
    $hash_pass=password_hash($password, PASSWORD_DEFAULT);
    if($role=='Student')
    {
        $role_id=1;
    }elseif($role=='Teacher')
    {
        $role_id=2;
    }
    elseif($role=='Admin')
    {
        $role_id=3;
    }
    $qry = "INSERT INTO users VALUES(' ','$f_name','$m_name','$l_name','$email','$hash_pass','$role_id','$dob','$gender','$address','$phone_no','$year_of_study');";
    if(mysqli_query($con,$qry))
    {
        header('location:users.php');
    }
}
$content=ob_get_clean();
include __DIR__.'/../layout/app_layout2.php';
?>