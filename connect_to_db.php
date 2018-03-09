<!DOCTYPE html>
<html>
<head>
	<title>Connection to the Database</title>
</head>
<body>
<?php

	$connection = mysqli_connect('localhost', 'root', '', '1400degrees');	
	
	if(!$connection)
	{
		die("Database connection failed");
	}


?>

</body>
</html>