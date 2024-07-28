<?php
ob_start();
require '../config/db.php';
require '../vendor/autoload.php';
$pagetitle = "Personal Info";
?>
<?php
$qry = "SELECT * FROM USERS;";
$result = mysqli_query($con, $qry);
$rows = $result->fetch_assoc()
?>
<section>
    <table class="table table-stripped table-border">
        <tr>
            <th>ID:</th>
            <td><?php echo $rows['id']; ?></td>
        </tr>
        <tr>
            <th>First Name:</th>
            <td><?php echo $rows['f_name']; ?></td>
        </tr>
        <tr>
            <th>Middle Name:</th>
            <td><?php echo $rows['m_name']; ?></td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td><?php echo $rows['l_name']; ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $rows['email']; ?></td>
        </tr>
        <tr>
            <th>Date of Birth:</th>
            <td><?php echo $rows['dob']; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $rows['gender']; ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><?php echo $rows['address']; ?></td>
        </tr>
        <tr>
            <th>Mobile Number:</th>
            <td><?php echo $rows['phone_no']; ?></td>
        </tr>
        <tr>
            <th>Year of Study:</th>
            <td><?php echo $rows['year_of_study']; ?></td>
        </tr>
    </table>
</section>
<div style="text-align: left">
            <a href="edit_form.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary">Edit Info</a>
        </div>
<?php
$content = ob_get_clean();

include_once __DIR__ . '/../layout/app_layout2.php';
?>