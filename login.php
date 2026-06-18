<?php
include("config/db.php");

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users
WHERE email='$email'
AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$user=mysqli_fetch_assoc($result);

if($user['role']=="admin"){
header("Location: admin/dashboard.php");
}

elseif($user['role']=="teacher"){
header("Location: teacher/dashboard.php");
}

else{
header("Location: parent/dashboard.php");
}

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card p-4">

<h2>Login</h2>

<form method="POST">

<input
type="email"
name="email"
class="form-control mb-3"
placeholder="Email">

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password">

<button
name="login"
class="btn btn-success">

Login

</button>

</form>

</div>

</div>

</body>
</html>
