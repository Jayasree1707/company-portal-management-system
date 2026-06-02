<!DOCTYPE html>
<html>

<head>

<title>Employee Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card">

<div class="card-header bg-success text-white">

Employee Login

</div>

<div class="card-body">

<form
action="employee_login_process.php"
method="POST">

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button
type="submit"
class="btn btn-success w-100">

Login

</button>

</form>

</div>

<div class="card-footer text-center bg-success text-white">

Company Portal Employee Access

</div>

</div>

</div>

</div>

</div>

</body>

</html>