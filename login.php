<?php include("functions.php");?>
<?php include("db_connection.php");?>
<?php
	if($_POST["submit"]){
		login($POST["username"],$POST["password"]);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<?if (isset($_SESSION["message"]){
		echo $_SESSION["message"];
	})?>
	<form action=login.php">
		User name:<br>
		<input type="text" name="username">
  		<br>
  		Password:<br>
  		<input type="text" name="password">
  		<br><br>
  		<input type="submit" name="submit" value="Login">
	</form> 

</head>
<body>

</body>
</html>
