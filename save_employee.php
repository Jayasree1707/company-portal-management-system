<?php

include "../includes/db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$department = $_POST['department'];

$employee_id =
"EMP" . rand(1000,9999);

$password = $_POST['password'];

$hash =
password_hash(
$password,
PASSWORD_DEFAULT
);

$sql = "

INSERT INTO employees

(employee_id,
name,
email,
password,
designation,
department,
status)

VALUES

(
'$employee_id',
'$name',
'$email',
'$hash',
'$designation',
'$department',
'Active'
)

";

mysqli_query($conn,$sql);

header(
"Location: employees.php"
);

?>