<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Qtx Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

	<div class="header">
		<h2><span class="home"><i class="fas fa-user"></i></span>Login</h2>
	</div>
	<div class="navigation">
		<nav>
			<a href="register.php">Register</a> |
			<a href="search.php">Search</a> |
			<a href="index.php">Home</a> |
		</nav> 
	</div>
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			New User ? <a href="register.php">Create Account</a>
		</p>
	</form>


</body>
</html>