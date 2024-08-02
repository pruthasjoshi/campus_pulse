<?php
ob_start();
session_start();
require '../config/db.php';
require '../vendor/autoload.php';
$page_title = "Departments";
?>
<h1><u>Departments</u></h1><br>
<div class="header d-flex justify-content-between align-items-center">
    <div style="text-align: right">
        <a href="dep_form.php" class="btn btn-primary">Add Department</a>
    </div>
</div>
<br>
<table class="table table-border-1">
    <tr>
        <th>ID</th>
        <th>Department name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    $qry = "SELECT * From departments;";
    $res = mysqli_query($con, $qry);
    if (!$res) {
        die("query failed");
    } else {
        while ($row = $res->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
        <td>
            <a href="edit_dep_form.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
        </td>
        <td><a class="btn btn-danger" href="dep_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete</a></td>
    </tr>
    <?php
        }
    }
    ?>
</table>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>