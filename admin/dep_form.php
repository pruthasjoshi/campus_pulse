<?php
require '../vendor/autoload.php';
require '../config/db.php';
ob_start();
$page_title = "add user";
?>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-auto">
            <div class="card">
                <div class="card-body">
                    <form action="dep_insert.php" method="post">
                        <div class="form-row">
                            <h1><u>Add Department:</u></h1><br>
                            <b>
                            <div class="form-group col-md-6">
                                <label for="id">Department ID:</label><br>
                                <input type="text" name="id" class="form-control" placeholder="ID"><br>
                            </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Department Name :</label><br>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Department Name" ?><br>
                                </div>
                                <br>
                                <input class="btn btn-primary" type="submit" name="submit">
                                </br>
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