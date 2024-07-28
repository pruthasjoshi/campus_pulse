<?php
require '../vendor/autoload.php';
require '../config/db.php';
ob_start();
session_start();
        $id = $_GET['id'];
        $que = "SELECT * FROM users where id=$id";
        $res = mysqli_query($con, $que);
        $row = mysqli_fetch_assoc($res);
?>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-auto">
            <div class="card">
                <div class="card-header">
                    user
                </div>
                <div class="card-body">
                    <form action="edit.php" method="post">
                        <div class="form-row">
                            <h1><u>Form:</u></h1><br>
                            <b>
                                <div class="form-group col-md-6">
                                    <label for="f_name"> First-Name :</label><br>
                                    <input type="text" name="f_name" class="form-control" id="f_name" value=<?php echo $row['f_name'] ?>><br>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="m_name"> middle-Name :</label><br>
                                    <input type="text" name="m_name" class="form-control" id="m_name" value=<?php echo $row['m_name'] ?>><br>
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
                                    <select class="form-control" name="role" value=<?php echo $row['role'] ?>>
                                        <option>Student</option>
                                        <option>Teacher</option>
                                        <option>Admin</option>
                                    </select>
                                </div><br>
                                <div class="form-group col-md-6">
                                    <label for="Date_Of_Birth"> Date-Of-Birth :</label><br>
                                    <input type="date" name="Date_Of_Birth" class="form-control" id="Date_Of_Birth" value=<?php echo $row['dob'] ?>><br>
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
                                    <input type="text" name="address" class="form-control" id="address" value=<?php echo $row['address'] ?>><br>
                                </div>
                                </br>
                                <input class="btn btn-primary" type="submit" name="edit" value="Edit">
                            </b>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>