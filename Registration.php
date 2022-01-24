<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

	<?php
	/**
	 * Add student form
	 */

	 if (isset($_POST['submit'])) {
		// Get Value
		$name	= $_POST['name'];
		$uname	= $_POST['username'];
		$email	= $_POST['email'];
		$cell	= $_POST['cell'];
		$age	= $_POST['age'];

		// Form Validation
		if (empty($name && $uname && $email && $cell && $age)) {
			$msg = "<p class= 'alert alert-danger'>All fields are required!<button class=\"close\" data-dismiss=\"alert\">&times</button></p>";
		}else{
			$msg = "<p class= 'alert alert-success'>Data Sent!<button class=\"close\" data-dismiss=\"alert\">&times</button></p>";
		}
	 };


	?>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php

				if (isset($msg)) {
					echo $msg;
				}				
				?>


				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<!-- <label for="">Name</label> -->
						<input name="name" class="form-control" type="text" placeholder="Name">
					</div>					
					<div class="form-group">
						<!-- <label for="">Username</label> -->
						<input name="username" class="form-control" type="text" placeholder="User Name">
					</div>	
					<div class="form-group">
						<!-- <label for="">Email</label> -->
						<input name="email" class="form-control" type="text" placeholder="Email">
					</div>
					<div class="form-group">
						<!-- <label for="">Cell</label> -->
						<input name="cell" class="form-control" type="text" placeholder="Cell">
					</div>
					<div class="form-group">
						<!-- <label for="">Age</label> -->
						<input name="age" class="form-control" type="text" placeholder="Age">
					</div>
					<div class="form-group">
						<label for="">Profile Photo</label>
						<input name="photo" class="form-control" type="file" placeholder="User Photo">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>