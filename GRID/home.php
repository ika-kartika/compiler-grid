<?
    //mulai session
    session_start();
    //cek apakah user masih aktif login
    if(!isset($_SESSION['name']))
    {
                header('Location:index.php');    } 
$name=$_SESSION['name'];
?>
<html>
	<head>
		<title> Free C/C++ Compiler</title>
	</head>
	<body>
		<center>
			<h3>Setting IP Address Your Grid Computer In Here...</h3><br><br>
			<form method="post" action="next.php">
				IP Address &nbsp &nbsp
				<input type="text" name="ipg1" id="ipg1" style="width:60px">
				<input type="text" name="ipg2" id="ipg2" style="width:60px">
				<input type="text" name="ipg3" id="ipg3" style="width:60px">
				<input type="text" name="ipg4" id="ipg4" style="width:60px">
				<br><br>
				Subnet Mask
				<input type="text" name="subnet1" id="subnet1" style="width:60px">
				<input type="text" name="subnet2" id="subnet2" style="width:60px">
				<input type="text" name="subnet3" id="subnet3" style="width:60px">
				<input type="text" name="subnet4" id="subnet4" style="width:60px">
				<br><br>
				interface &nbsp &nbsp &nbsp
				<input type="text" name="int" id="int" style="width:255px"> <br><br>
				<input type="submit" value="Next >>">
			</form>
			<p><h4><? echo $name; ?> <a href="logout.php"> klik here</a> for logout..</h4></p>
		</center>
	</body>
</html>
