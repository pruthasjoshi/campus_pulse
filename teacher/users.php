<?php
ob_start();
session_start();
require '../config/db.php';
$page_title = "users";
?>
<div class="header d-flex justify-content-between align-items-center">
    <div style="text-align: right">
        <a href="form.php" class="btn btn-primary">add student</a>
    </div>
</div>
<br>
<table class="table table-border-1">
    <tr>
        <th>ID</th>
        <th>first name</th>
        <th>middle name</th>
        <th>last name</th>
        <th>email</th>
        <th>role_id</th>
        <th>date of birth</th>
        <th>Gender</th>
        <th>address</th>
        <th>Mobile Number</th>
        <th>year of study</th>
    </tr>
    <?php
    $qry = "SELECT * From users where role_id=1;";
    $res = mysqli_query($con, $qry);
    if (!$res) {
        die("query failed");
    }
    else{
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