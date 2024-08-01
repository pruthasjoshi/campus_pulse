<?php
require '../vendor/autoload.php';
require '../config/db.php';
ob_start();
$pagetitle = "Dashboard";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-top-0 border-bottom-0 border-end-0 shadow-lg p-3 mb-5 bg-primary rounded mb-3 text-white">
                <h5 class="card-title text-center">
                    <br>Total number of Users:<br>
                    <?php
                    $sql = "SELECT * FROM users;";
                    $query = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($query);
                    echo $count;
                    ?>
                    <br><br>
                </h5>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-top-0 border-bottom-0 border-end-0 shadow-lg p-3 mb-5 bg-warning rounded mb-3 text-white">
                <h5 class="card-title text-center">
                    <br>Total Number Of Student:<br>
                    <?php
                    $sql = "SELECT * FROM USERS where role_id=1;";
                    $query = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($query);
                    echo $count;
                    ?>
                    <br><br>
                </h5>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-top-0 border-bottom-0 border-end-0 shadow-lg p-3 mb-5 bg-success rounded mb-3 text-white">
                <h5 class="card-title text-center">
                    <br>Total Number Of Teacher:
                    <?php
                    $sql = "SELECT * FROM USERS where role_id=2;";
                    $query = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($query);
                    echo $count;
                    ?>
                    <br><br>
                </h5>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-top-0 border-bottom-0 border-end-0 shadow-lg p-3 mb-5 bg-danger rounded mb-3 text-white">
                <h5 class="card-title text-center">
                    <br>Total Number Of Admin:
                    <?php
                    $sql = "SELECT * FROM USERS where role_id=3;";
                    $query = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($query);
                    echo $count;
                    ?>
                    <br><br>
                </h5>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>