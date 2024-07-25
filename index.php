<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require 'config/db.php';
ob_start();
$pagetitle = "Dashboard";
?>
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-6">
                            <div class="card border-top-3 border-end-3 border-bottom-3 border-primary border-3 text-center shadow mb-3">
                                <br>Card-1<br><br>
                            </div>
                        </div> -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col md-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total users
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php
                                    $sql = "SELECT * FROM users";
                                    $u_count = mysqli_query($con, $sql);
                                    if ($total = mysqli_num_rows($u_count)) {
                                        echo '<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">' . $total . '</div>';
                                    } else {
                                        echo '<h4 class="mb-">total is not</h4>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Active Users:
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php
                                    // $sql = "SELECT status FROM users WHERE status=1";
                                    // $que = mysqli_query($con, $sql);
                                    // $stat = mysqli_num_rows($que);
                                    // echo '<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">' . $stat . '</div>';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Card-3
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Card-4
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/layout/app_layout2.php';
?>