<?php

include "../includes/db.php";

$id = $_POST['id'];

$name = $_POST['name'];

$email = $_POST['email'];

$designation = $_POST['designation'];

$department = $_POST['department'];

$sql = "

UPDATE employees

SET

name='$name',
email='$email',
designation='$designation',
department='$department'

WHERE id='$id'

";

mysqli_query($conn,$sql);

header(
"Location: employees.php"
);

?>
