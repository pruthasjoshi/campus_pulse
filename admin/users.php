<?php
ob_start();
require '../config/db.php';
require '../vendor/autoload.php';
$page_title = "users";
?>
<div class="header d-flex justify-content-between align-items-center">
    <div style="text-align: right">
        <a href="form.php" class="btn btn-primary">add user</a>
    </div>
</div>
<br>
<table class="table table-border-1">
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Middle name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Role_id</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Mobile Number</th>
        <th>Year Of Study</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    $qry = "SELECT * From users;";
    $res = mysqli_query($con, $qry);
    if (!$res) {
        die("query failed");
    } else {
        while ($row = $res->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["f_name"]; ?></td>
                <td><?php echo $row["m_name"]; ?></td>
                <td><?php echo $row["l_name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["role_id"]; ?></td>
                <td><?php echo $row["dob"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["phone_no"]; ?></td>
                <td><?php echo $row["year_of_study"]; ?></td>
                <td><a href="edit_form.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete</a></td>
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