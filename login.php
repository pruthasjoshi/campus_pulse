<?php
session_start();
require 'config/db.php';
require 'vendor/autoload.php';
?>
<div class="container">
    <div class="row justify-content-center h-100">
        <div class="card w-25 my-auto shadow ">
            <div class="card-header text-center bg-primary text-white">
                <h2>Login form</h2>
            </div>
            <div class="card-body py-5">
                <form action="login_database.php" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div><br>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div><br>
                    <p class="text-danger"><?php if (isset($_SESSION['error'])) {
                                                echo $_SESSION['error'];
                                                unset($_SESSION['error']);
                                            } ?></p>
                    <br>
                    <input type="submit" name="login" class="btn btn-primary w-100" value="login">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/layout/guest_layout.php';
?>