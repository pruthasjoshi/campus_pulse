<?php
require 'vendor/autoload.php';
require 'config/db.php';
ob_start();
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
            <div class="card-header">
                Form
            </div>
            <div class="card-body">
                <form action="insert.php" method="POST">
                    <div class="form-row">
                        <b>
                            <div class="form-group col-md-6">
                                <label for="f_name"> First-Name :</label><br>
                                <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name"><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="m_name"> middle-Name :</label><br>
                                <input type="text" name="m_name" class="form-control" id="m_name" placeholder="middle Name"><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="l_name"> Last-Name :</label><br>
                                <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name"><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email"> E-mail : </label><br>
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail"><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password"> Password :</label><br>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password"><br>
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
                                <label for="dob"> Date-Of-Birth :</label><br>
                                <input type="date" name="dob" class="form-control" id="dob" placeholder="DD/MM/YYYY"><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender"> Gender :</label><br>
                                <input class="form-check-input" type="radio" id="gender" name="gender" value="male">
                                <label for="male">Male</label>
                                <input class="form-check-input" type="radio" id="gender" name="gender" value="female">
                                <label for="female">Female</label><br><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone_no"> Mobile-number :</label><br>
                                <input type="number" name="phone_no" class="form-control" id="phone_no" placeholder="Phone Number"><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address:</label><br>
                                <input type="textbox" name="address" class="form-control" id="address" placeholder="address"><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="year_of_study">Year of study :</label><br>
                                <input type="date" name="year_of_study" class="form-control" id="year_of_study" placeholder="year_of_study"><br>
                            </div>
                            <input class="btn btn-primary" type="submit" name="submit">
                            </br>
                        </b>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/layout/app_layout2.php';
?>