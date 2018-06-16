<?php include('server.php')?>
<!DOCTYPE html>
<head>
	<title>Qtx Search</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="header">
		<h2><span class="home"><i class="fas fa-search"></i></span>Search Users</h2>
</div>
<div class="navigation">
		<nav>
			<a href="register.php">Register</a> |
			<a href="login.php">Login</a> |
			<a href="index.php">Home</a> |
		</nav> 
	</div>
<form method="post" action="search.php">

<div class="input-group">
    <input type="text" name="query">
</div>
<div class="input-group">
	<button type="submit" name="submit-search" class="btn">Search</button>
</div>
</form>
<div class="search-content">
<?php
    $query = $_POST['query'];

    if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($db, $query);
        $sql = "SELECT * from users WHERE username LIKE '%$search%'";
        $result = mysqli_query($db, $sql);
        $searchResults = mysqli_num_rows($result);

        if($searchResults > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<h3>".$row['username']."</h3>";
                echo "<p>".$row['email']."</p>";
            }
        } else {
            echo 'No users matching your search !';
        }
    }	
?>
</div>
</body>
</html>