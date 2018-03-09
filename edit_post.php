
<?php include 'connect_to_db.php' ?>
<?php
		// Checking if the form was submitted
	
	
	if(isset($_POST['submit'])) {

		

		$update_id = $_POST['update_id'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$position = $_POST['position'];
	

		// Update values in the db

		$query = "UPDATE users SET 

					Name = '$name',
					Surname = '$surname',
					Email = '$email',
					Phone = '$phone',
					Position = '$position'
						WHERE Id = {$update_id}";

		if(!mysqli_query($connection, $query)) {

			die("Error, user not updated");
		} else {
			header('Location: view_users.php');
		}

		
	}

	$id = mysqli_real_escape_string($connection, $_GET['id']);

		// CREATE QUERY
	$query = "SELECT * FROM users WHERE Id=".$id;

		// GET RESULT
	$result  = mysqli_query($connection, $query);

		//FETCH DATA
	$post = mysqli_fetch_assoc($result);

	
	// var_dump($posts);

		// FREE RESULT
	mysqli_free_result($result);

		//CLOSE CONNECTION
	mysqli_close($connection);
?>


<html>
<head>
	<title>Edit user</title>
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
		<h4>Update the current User</h4>
	<div class="alert-success"><h4></h4> </div>
		
		<!--FORMULAR-->
		<form name="users" method="post" action="edit_post.php" onsubmit="return validateForm()" >
			<!--NAME-->
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control" value="<?php echo $post['Name'];?>" placeholder="Please enter Name">
			</div>
			<!--SURNAME-->
			<div class="form-group">
				<label>Surname:</label>
				<input type="text" name="surname" id="surname" class="form-control" value="<?php echo $post['Surname'];?>" placeholder="Please enter Surname">
			</div>
			<!--EMAIL-->
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" id="email" class="form-control" value="<?php echo $post['Email'];?>" placeholder="Please enter Email">
			</div>
			<!--PHONE-->
			<div class="form-group">
				<label>Phone:</label>
				<input type="text" name="phone" id="phone" class="form-control" value="<?php echo $post['Phone'];?>" placeholder="Please enter Phone">
			</div>
			<!--POSITION-->
			<div class="form-group">
				<label>Position:</label>
				<input type="" name="position" id="position" class="form-control" value="<?php echo $post['Position'];?>" placeholder="Please enter Position">
			</div>
				<input type="hidden" name="update_id" value="<?php echo $post['Id']; ?>">
				<input type="submit" name="submit" id="submit" value="Modify" class="btn btn-warning">
			</div>
		</form><!--END FORMULAR-->
	</div><!---->


</body>
</html>