<?php
include_once("config.php");
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',username='$username',password='$password' WHERE id=$id");
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$username = $user_data['username'];
	$password = $user_data['password'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username" value=<?php echo $username;?>></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" value=<?php echo $password;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>