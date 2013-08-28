<?
session_start();
if(isset($_SESSION['name'])){
header('Location: home.php');
}
?>
<html>
	<head>
		<title> Free C/C++ Compiler</title>
	</head>
	<body>
		<center>
			<h3>Login..</h3><br><br>
			<form method="post" action="login.php">
				Email &nbsp &nbsp &nbsp &nbsp
				<input type="text" name="email" id="email">
				<br><br>
				Password
				<input type="password" name="pass" id="pass"> <br><br>
				<input type="submit" value="Login">
			</form>
		</center>
	</body>
</html>
