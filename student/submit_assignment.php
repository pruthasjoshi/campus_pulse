<?php
session_start();
$title = 'Submit Assignment';
require '../vendor/autoload.php';
require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $assignment_id = $_POST['assignment_id'];
    $student_id = $_SESSION['id'];
    $file_path = $_FILES['file_path']['name'];
    $submission_date = date('Y-m-d');

    move_uploaded_file($_FILES['file_path']['tmp_name'], $file_path);

    $qry = "INSERT INTO submissions (assignment_id, user_id, file_path, submission_date) VALUES ('$assignment_id', '$student_id', '$file_path', '$submission_date')";
    mysqli_query($con, $qry);
    header('location:index.php');
}

$qry = "SELECT * FROM assignments;";
$result = mysqli_query($con, $qry);

ob_start();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Assignments</h2>
            <table class="table table-hover table-striped table-bordered mb-0">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Due Date</th>
                        <th>Upload File</th>
                        <th>Submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['due_date']; ?></td>
                            <td class="text-center">
                                <form action="submit_assignment.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="assignment_id" value="<?php echo $row['id']; ?>">
                                    <div class="form-group">
                                        <input type="file" name="file_path" required>
                                    </div>
                                    <td class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </td>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>