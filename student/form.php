<?php
require '../vendor/autoload.php';
require '../config/db.php';
$page_title="add user";
ob_start();
?>
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
                            <input type="text" name="f_name" class="form-control" placeholder="First Name"><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="m_name"> middle-Name :</label><br>
                            <input type="text" name="m_name" class="form-control" placeholder="middle Name"><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="l_name"> Last-Name :</label><br>
                            <input type="text" name="l_name" class="form-control" placeholder="Last Name"><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email"> E-mail : </label><br>
                            <input type="email" name="email" class="form-control" placeholder="E-mail"><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password"> Password :</label><br>
                            <input type="password" name="password" class="form-control" placeholder="Password"><br>
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
                            <input type="date" name="dob" class="form-control" placeholder="date of birth"><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender"> Gender :</label><br>
                            <input class="form-check-input" type="radio" name="gender" value="male">
                            <label for="male">Male</label>
                            <input class="form-check-input" type="radio" name="gender" value="female">
                            <label for="female">Female</label>
                        </div><br>
                        <div class="form-group col-md-6">
                            <label for="phone_no"> Mobile-number :</label><br>
                            <input type="number" name="phone_no" class="form-control" placeholder="Phone Number"><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address:</label><br>
                            <input type="text" name="address" class="form-control" placeholder="address"><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="year_of_study">Year of study :</label><br>
                            <input type="date" name="year_of_study" class="form-control" placeholder="year_of_study"><br>
                        </div>
                        <input class="btn btn-primary" type="submit" name="submit">
                        </br>
                    </b>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>