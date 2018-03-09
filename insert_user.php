
<?php include 'connect_to_db.php' ?>
<?php
		// Checking if the form was submitted
	$message = '';
	
	if(filter_has_var(INPUT_POST, 'submit')) {

		// Collecting the input fields

		$name = htmlspecialchars($_POST['name']);
		$surname = htmlspecialchars($_POST['surname']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$position = htmlspecialchars($_POST['position']);
	

		// Insert values in the db

		$query = "INSERT INTO users(Name, Surname, Email, Phone, Position)";
		$query .= "VALUES ('$name', '$surname', '$email', '$phone', '$position')";

		$result = mysqli_query($connection, $query);

		if($result) {

			$message="You succesfully added the user!";
		}
	}
?>


<html>
<head>
	<title>Insert Users In Database</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="form_validation.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
		
			<div class="navbar-header">
				<a class="navbar-brand"  href="view_users.php">List Of Users</a>
				
			</div>
		</div>
	</nav>
	<div class="container">
	<div class="alert-success"><h4><?php echo $message; ?></h4> </div>
		
		<!--FORMULAR-->
		<form name="users" method="post" action="" onsubmit="return validateForm()">
			<!--NAME-->
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Please enter Name">
			<!--SURNAME-->
			<div class="form-group">
				<label>Surname:</label>
				<input type="text" name="surname" id="surname" class="form-control" value="" placeholder="Please enter Surname"></div>
			<!--EMAIL-->
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" id="email" class="form-control" value="" placeholder="Please enter Email">
				</div>
			<!--PHONE-->
			<div class="form-group">
				<label>Phone:</label>
				<input type="text" name="phone" id="phone" class="form-control" value="" placeholder="Please enter Phone">
				</div>
			<!--POSITION-->
			<div class="form-group">
				<label>Position:</label>
				<input type="" name="position" id="position" class="form-control" value="" placeholder="Please enter Position">
				</div>
				<button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">Submit</button> 
			</div>
		</form><!--END FORMULAR-->
	</div><!---->


</body>
</html>