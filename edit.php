<?php
require 'vendor/autoload.php';
require 'config/db.php';
ob_start();
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php
                $id = $_GET['id'];
                $que = "SELECT * FROM users where id=$id";
                $res = mysqli_query($con, $que);
                $row = mysqli_fetch_assoc($res);
                ?>
                <div class="col-md-auto">
                    <div class="card">
                        <div class="card-header">
                            user
                        </div>
                        <div class="card-body">
                            <form action=" " method="post">
                                <div class="form-row">
                                    <h1><u>Form:</u></h1><br>
                                    <b>
                                        <div class="form-group col-md-6">
                                            <label for="f_name"> First-Name :</label><br>
                                            <input type="text" name="f_name" class="form-control" id="f_name" value=<?php echo $row['f_name'] ?>><br>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="m_name"> middle-Name :</label><br>
                                            <input type="text" name="m_name" class="form-control" id="m_name" placeholder="middle Name"><br>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="l_name"> Last-Name :</label><br>
                                            <input type="text" name="l_name" class="form-control" id="l_name" value=<?php echo $row['l_name'] ?>><br>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email"> E-mail : </label><br>
                                            <input type="email" name="email" class="form-control" id="email" value=<?php echo $row['email'] ?>><br>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="role">Role</label>
                                            <select class="form-control" name="role">
                                                <option>Student</option>
                                                <option>Teacher</option>
                                                <option>Admin</option>
                                            </select>
                                        </div><br>
                                        <div class="form-group col-md-6">
                                            <label for="Date_Of_Birth"> Date-Of-Birth :</label><br>
                                            <input type="date" name="Date_Of_Birth" class="form-control" id="Date_Of_Birth" placeholder="DD/MM/YYYY"><br>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="gender"> Gender :</label><br>
                                            <input class="form-check-input" type="radio" id="gender" name="gender" value="male" <?php echo $row['gender'] == "male" ? "checked" : "" ?>>
                                            <label for="male">Male</label>
                                            <input class="form-check-input" type="radio" id="gender" name="gender" value="female" <?php echo $row['gender'] == "female" ? "checked" : "" ?>>
                                            <label for="female">Female</label><br>
                                        </div><br>
                                        <div class="form-group col-md-6">
                                            <label for="phone_no"> Mobile-number :</label><br>
                                            <input type="number" name="phone_no" class="form-control" id="phone_no" value=<?php echo $row['phone_no'] ?>><br>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address">Address:</label><br>
                                            <input type="textbox" name="address" class="form-control" id="address" placeholder="address"><br>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="year_of_study">Year of study :</label><br>
                                            <input type="date" name="year_of_study" class="form-control" id="year_of_study" placeholder="year_of_study"><br>
                                        </div>
                                        <input class="btn btn-primary" type="submit" name="edit" value="Edit">
                                        </br>
                                    </b>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['edit'])) {
                    $id = $_GET['id'];
                    $f_name = $_POST['f_name'];
                    $l_name = $_POST['l_name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $gender = $_POST['gender'];
                    $phone_no = $_POST['phone_no'];
                    $edit = "UPDATE users SET f_name='$f_name',l_name='$l_name',email='$email',gender='$gender',phone_no='$phone_no' WHERE id='$id' ";
                    $res = mysqli_query($con, $edit);
                    if ($res) { ?>
                        <script type="text/javascript">
                            // alert("data updated");
                            window.open("users.php", "_self");
                        </script>
                        //header('location:users.php');
                <?php
                    } else {
                        echo ("not");
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    $content = ob_get_clean();
    include_once __DIR__ . '/layout/app_layout2.php';
    ?>
</body>

</html>