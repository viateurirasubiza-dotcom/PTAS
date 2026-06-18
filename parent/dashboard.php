<?php
include("../config/db.php");

$result=mysqli_query($conn,"
SELECT students.fullname,
attendance.attendance_date,
attendance.status

FROM attendance

JOIN students
ON students.id=attendance.student_id
");
?>

<!DOCTYPE html>
<html>
<head>

<title>Parent Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Child Attendance</h2>

<table class="table">

<tr>
<th>Student</th>
<th>Date</th>
<th>Status</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?=$row['fullname']?></td>

<td><?=$row['attendance_date']?></td>

<td><?=$row['status']?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>
