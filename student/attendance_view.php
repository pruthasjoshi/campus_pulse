<?php
require "../config/db.php";
ob_start();
session_start();
$id = $_SESSION['id'];
$qry = "SELECT * from attendance where user_id=$id";
$res = mysqli_query($con, $qry);
?>
<section>
<h1 class="text-center"><u>Attendance</u></h1>
    <table class="table table-bordered">
        <tr>
            <th>Date</th>
            <th>Status</th>
        </tr>
            <?php
            while ($row = $res->fetch_assoc()) {
            ?>
        <tr>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['status']; ?></td>
        </tr>
    <?php } ?>
    </table>
</section>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>