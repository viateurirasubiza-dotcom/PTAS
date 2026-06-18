<?php
include("../config/db.php");

if(isset($_POST['save'])){

$student=$_POST['student'];

$status=$_POST['status'];

$date=date("Y-m-d");

$sql="INSERT INTO attendance
(student_id,teacher_id,attendance_date,status)

VALUES

('$student','1','$date','$status')";

mysqli_query($conn,$sql);

echo "Attendance Saved";
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Attendance</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Mark Attendance</h2>

<form method="POST">

<select
name="student"
class="form-control mb-3">

<?php

$result=mysqli_query(
$conn,
"SELECT * FROM students"
);

while($row=mysqli_fetch_assoc($result)){

?>

<option value="<?=$row['id']?>">

<?=$row['fullname']?>

</option>

<?php } ?>

</select>

<select
name="status"
class="form-control mb-3">

<option>Present</option>
<option>Absent</option>
<option>Late</option>

</select>

<button
name="save"
class="btn btn-primary">

Save Attendance

</button>

</form>

</div>

</body>
</html>
