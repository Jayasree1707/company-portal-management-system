<?php

include "../includes/db.php";

$id = $_GET['id'];

$result =
mysqli_query(
$conn,
"SELECT * FROM employees WHERE id='$id'"
);

$employee =
mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
<title>Edit Employee</title>
</head>

<body>

<h1>Edit Employee</h1>

<form
action="update_employee.php"
method="POST">

<input
type="hidden"
name="id"
value="<?php echo $employee['id']; ?>">

<input
type="text"
name="name"
value="<?php echo $employee['name']; ?>"
required>

<br><br>

<input
type="email"
name="email"
value="<?php echo $employee['email']; ?>"
required>

<br><br>

<input
type="text"
name="designation"
value="<?php echo $employee['designation']; ?>"
required>

<br><br>

<input
type="text"
name="department"
value="<?php echo $employee['department']; ?>"
required>

<br><br>

<button type="submit">
Update Employee
</button>

</form>

</body>
</html>