<?php

session_start();

include "../includes/db.php";

$email = $_POST['email'];

$password = $_POST['password'];

$sql =
"SELECT * FROM admins
WHERE email='$email'";

$result =
mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){

$row =
mysqli_fetch_assoc($result);

if(
password_verify(
$password,
$row['password']
)
){

$_SESSION['employee_id']
=
$row['id'];

$_SESSION['employee_name']
=
$row['name'];

header("Location: ../admin/dashboard.php");
exit();


}else{

echo "Invalid Password";

}

}else{

echo "Employee Not Found";

}