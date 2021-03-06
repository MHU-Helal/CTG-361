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
	 * Form Values Getting Process
	 */
	if (isset($_POST['submit'])) {
		$name	= $_POST['name'];
		$email	= $_POST['email'];
		$cell	= $_POST['cell'];
		$age	= $_POST['age'];
		$photo	= $_FILES['photo'];

		/**
		 * File Upload Section
		 */
		$file_name	= $photo['name'];
		$tmp_name	= $photo['tmp_name'];
		$file_size	= $photo['size'] / (1024*1024); //File size converted into MB!

		/**
		 * Form Empty Check
		 * empty($name || $email || $cell || $age) (This code does not work!)
		 * empty ($name && $email && $cell && $age) (This code works fine!)
		 */
		if (empty($name) || empty($email) || empty($cell) || empty($age)) {
			$mess = '<p class="alert alert-danger">All fields are required! <button class="close" data-dismiss="alert">&times;</button> </p>';
		}else{
			$mess = '<p class="alert alert-success">Data submission successful! <button class="close" data-dismiss="alert">&times;</button> </p>';
		}

	}

	?>

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Add new student</h2>
				<?php
				/**
				 * Fields Value related notification area
				 */
				if (isset($mess)) {
					echo $mess;
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<!-- <label for="">Name</label> -->
						<input name="name" class="form-control" type="text" placeholder="Student Name">
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
						<!-- <label for="">age</label> -->
						<input name="age" class="form-control" type="text" placeholder="Age">
					</div>
					<div class="form-group">
						<!-- <label for="">Student Photo</label> -->
						<input name="photo" class="form-control" type="file" placeholder="Student Photo">
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