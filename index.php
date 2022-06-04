<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website Homepage</title>
	<style>
		body {
			display: flex;
			justify-content: center;
		}
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
		<h1>Welcome! to Homepage.</h1>
		<br>
		Hello, <?php echo $user_data['user_name']; ?> <br>
		<button>
			<a href="logout.php">Logout</a>
		</button>
</body>
</html>