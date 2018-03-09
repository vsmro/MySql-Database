<?php include 'connect_to_db.php' ?>

<?php

	if(isset($_POST['delete'])){
		// Get form data
		$delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);

		$query = "DELETE FROM users WHERE Id = {$delete_id}";

		if(!mysqli_query($connection, $query)) {

			die("Error, user not deleted");
		} else {
			header('Location: view_users.php');
		}
		
	}

		// GET ID
		$id = mysqli_real_escape_string($connection, $_GET['id']);

		// CREATE QUERYES
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
	<title>List of Users</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
		<div class="container">
			<!--MODAL FOR CONFIRM USER DELETE-->
			<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							Are you sure you want to delete?
						</div>
						<div class="modal-body">
							User with ID : <?php echo $id ;?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<input type="hidden" name="delete_id" value="<?php echo $post['Id']; ?>">
								<input type="submit" name="delete" value="Delete" class="btn btn-danger" id="delete_usr">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END -->
		
			<div class="navbar-header">
				<a class="navbar-brand"  href="insert_users.php">Insert User</a>
				<a class="navbar-brand"  href="view_users.php">List Of Users</a>
				
			</div>
	<div class="container">
	<div class="table-responsive">
		<table class="table table-bordered">
		<th>Name</th>
		<th>Surname</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Position</th>
		<th>Functions</th>
		 	<tr><td><?php echo $post['Name']; ?></td>
	 			<td><?php echo $post['Surname']; ?></td>
	 			<td><?php echo $post['Email']; ?></td>
	 			<td><?php echo $post['Phone']; ?></td>
	 			<td><?php echo $post['Position']; ?></td>
	 			<td>
					<div class="btn-group">
						<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete">Delete </a>
	 					<a href="edit_post.php?id=<?php echo $post['Id']; ?>" class="btn btn-success">Edit </a>
				</td>
	 			</div>
	 		</tr>

	 
	 	</table><!--END table-->
	 </div><!--END div table-responsive-->
	 </div><!--END div class container-->

			<!-- SCRIPTS -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script src="form_validation.js"></script>
</body>
</html>