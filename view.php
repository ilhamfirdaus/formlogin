<html>
<body align="center">
<h3>Hasil Input</h3>
<table align="center">
<tr>
<td>E-Mail<td>:</td></td>
<td> <?php echo $_POST['email']; ?></td>
</tr>
<tr>
<td>Fullname<td>:</td></td>
<td> <?php echo $_POST['fullname']; ?></td>
</tr>
<tr>
<td>Username<td>:</td></td>
<td> <?php echo $_POST['username']; ?></td>
</tr>
<tr>
<td>Password<td>:</td></td>
<td> 
<?php $password=$_POST['password'];
	$password= str_repeat("#",strlen($password));
	echo "$password"
?>

</td>
</tr>
</table>
</body>
</html>