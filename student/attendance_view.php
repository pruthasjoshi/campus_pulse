<?php
require "../config/db.php";
ob_start();
session_start();
$id = $_SESSION['id'];
$qry = "SELECT date,status from attendance where user_id=$id order by date";
$res = mysqli_query($con, $qry);
?>
<h1 class="text-center"><u>Attendance</u></h1>
<a href="daily_report.php" class="btn btn-sm btn-primary">View Daily report</a><br>
<br><a href="specific_report.php" class="btn btn-sm btn-primary">View Specific duration report</a><br>
    <table class="table table-bordered">
        <br><tr>
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

<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>