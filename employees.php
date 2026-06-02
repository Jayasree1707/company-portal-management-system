<?php

include "../includes/db.php";

$search = "";

if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$sql = "SELECT * FROM employees
        WHERE name LIKE '%$search%'
        OR email LIKE '%$search%'
        OR employee_id LIKE '%$search%'
        ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>Employees</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<div class="main">

<h1>Employees</h1>

<!-- Search Form Starts Here -->

<div class="card p-3 mb-3">

<form method="GET">

<div class="row">

<div class="col-md-10">

<input
type="text"
name="search"
class="form-control"
placeholder="Search Employee"
value="<?php echo $search; ?>">

</div>

<div class="col-md-2">

<button
class="btn btn-primary w-100">
Search
</button>

</div>

</div>

</form>

</div>

<!-- Search Form Ends Here -->

<table class="table table-striped">

<tr>
<th>ID</th>
<th>Employee ID</th>
<th>Name</th>
<th>Email</th>
<th>Designation</th>
<th>Department</th>
<th>Actions</th>
</tr>

<?php

while(
$row =
mysqli_fetch_assoc($result)
){

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['employee_id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['designation']; ?></td>

<td><?php echo $row['department']; ?></td>

<td>

<a
href="edit_employee.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a
href="delete_employee.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete employee?')">

Delete

</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

</body>

</html>