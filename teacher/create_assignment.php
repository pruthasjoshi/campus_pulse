<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';
$title= 'Create Assignment';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $max_marks = $_POST['max_marks'];
    $teacher_id = $_SESSION['user_id'];

    $qry = "INSERT INTO assignments (user_id, title, description, due_date, max_marks) VALUES ('$teacher_id', '$title', '$description', '$due_date', '$max_marks')";
    mysqli_query($con, $qry);
    header('location:create_assignment.php');
}

ob_start();
?>

<div class="col-md-10">
    <div class="row">
        <h2>Create Assignment</h2>
        <form action="create_assignment.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="date" class="form-control" id="due_date" name="due_date" required>
            </div>
            <div class="form-group">
                <label for="max_marks">Max Marks:</label>
                <input type="number" class="form-control" id="max_marks" name="max_marks">
            </div><br>
            <button type="submit" class="btn btn-primary">Create Assignment</button>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>