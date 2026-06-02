<?php

session_start();

if(!isset($_SESSION['employee_id'])){

    header("Location: ../auth/employee_login.php");
    exit();

}

include "../includes/db.php";

$id = $_SESSION['employee_id'];

$result =
mysqli_query(
$conn,
"SELECT * FROM employees WHERE id='$id'"
);

$employee = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>

<title>Employee Portal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-success text-white">

Employee Portal

</div>

<div class="card-body">

<h3>
Welcome,
<?php echo $employee['name']; ?>
</h3>

<hr>

<p>
<strong>Employee ID:</strong>
<?php echo $employee['employee_id']; ?>
</p>

<p>
<strong>Email:</strong>
<?php echo $employee['email']; ?>
</p>

<p>
<strong>Designation:</strong>
<?php echo $employee['designation']; ?>
</p>

<p>
<strong>Department:</strong>
<?php echo $employee['department']; ?>
</p>

<p>
<strong>Status:</strong>
<?php echo $employee['status']; ?>
</p>

<a
href="../auth/logout.php"
class="btn btn-danger">

Logout

</a>

</div>

</div>

</div>

</body>

</html>