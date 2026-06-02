<?php

session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: ../auth/admin_login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Add Employee</title>

<link
rel="stylesheet"
href="../assets/css/style.css">

</head>

<body>

<div class="main">

<h1>Add Employee</h1>

<form
action="save_employee.php"
method="POST">

<input
type="text"
name="name"
placeholder="Employee Name"
required>

<br><br>

<input
type="email"
name="email"
placeholder="Employee Email"
required>

<br><br>

<input
type="text"
name="designation"
placeholder="Designation"
required>

<br><br>

<input
type="text"
name="department"
placeholder="Department"
required>

<br><br>

<input
type="password"
name="password"
placeholder="Employee Password"
required>

<br><br>

<button type="submit">
Create Employee
</button>

</form>

</div>

</body>

</html>