<?php include 'connect_to_db.php' ?>

<?php
		// CREATE QUERY
	$query = "SELECT * FROM users";

		// GET RESULT
	$result  = mysqli_query($connection, $query);

		//FETCH DATA
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	
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

		
			<div class="navbar-header">
				<a class="navbar-brand"  href="view_users.php">List Of Users</a>
				<a class="navbar-brand"  href="insert_user.php">Insert Users</a>
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
	 <?php foreach($posts as $post) :?>

	 	<tr><td><?php echo $post['Name']; ?></td>
	 		<td><?php echo $post['Surname']; ?></td>
	 		<td><?php echo $post['Email']; ?></td>
	 		<td><?php echo $post['Phone']; ?></td>
	 		<td><?php echo $post['Position']; ?></td>
	 		<td><a class="btn btn-success" href="post.php?id=<?php echo $post['Id']; ?>">Update User </a></td>
	 	</tr>

	 <?php endforeach; ?>
	 	</table><!--END table-->
	 </div><!--END div table-responsive-->
	 </div><!--END div class container-->


</body>
</html>