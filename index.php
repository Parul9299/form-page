<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Creation</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="row">
				<div class="col-12">
					<h2>Create User</h2>
				</div>


				<div class="col-lg-4 mb-3">
					<label class="form-label">Name</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="col-lg-4 mb-3">
					<label class="form-label">Mobile</label>
					<input type="number" name="mobile" class="form-control">
				</div>

				<div class="col-lg-4 mb-3">
					<label class="form-label">Email</label>
					<input type="email" name="email" class="form-control">
				</div>

				<div class="col-lg-4 mb-3">
					<label class="form-label">City</label>
					<input type="text" name="city" class="form-control">
				</div>

				<div class="col-lg-4 mb-3">
					<label class="form-label">Age</label>
					<input type="number" name="age" class="form-control">
				</div>

				<div class="col-lg-4 mt-4">
					<input type="submit" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_POST['name'])){
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$age = $_POST['age'];
	$now = date('Y-m-d H:i:s');
	

	// m 01 - 12
	// M  Jan - Dec

	$db = mysqli_connect('localhost','root','','groups');

// query to database
	$sql = "INSERT INTO 
	`groups` (
		`mobile`, 
		`name`, 
		`email`,
		`city`, 
		`age`,
		`created_at`
		)
	VALUES(
		'$mobile',
		'$name',
		'$email',
		'$city',
		'$age',
		'$now'
	)";

	// $sql = "ALTER TABLE
	// `groups`
	// ADD `DateOfBirth` year;
	//  ";


	// $sql = "ALTER TABLE
	// `groups`
	// DROP COLUMN `people`;
	// ";

	

	mysqli_query($db, $sql);

}
// database connection 
// $db = mysqli_connect('hostname','database_username','database_password','database_name')
