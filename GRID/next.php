<?

    //mulai session
    session_start();
    //cek apakah user masih aktif login
    if(!isset($_SESSION['name']))
    {
                header('Location:index.php');    }
$name=$_SESSION['name'];

$ipg1=$_POST['ipg1'];
$ipg2=$_POST['ipg2'];
$ipg3=$_POST['ipg3'];
$ipg4=$_POST['ipg4'];
$subnet1=$_POST['subnet1'];
$subnet2=$_POST['subnet3'];
$subnet3=$_POST['subnet3'];
$subnet4=$_POST['subnet4'];
$interface=$_POST['int'];
?>
<html>
	<head>
		<title> Free C/C++ Compiler</title>
	</head>
	<body>
		<center>
			<h3>Input IP Address Your Server In Here...</h3><br><br>
			<form method="post" action="review.php">
				IP Address Server &nbsp &nbsp
				<input type="text" name="ips1" id="ips1" style="width:60px">
				<input type="text" name="ips2" id="ips2" style="width:60px">
				<input type="text" name="ips3" id="ips3" style="width:60px">
				<input type="text" name="ips4" id="ips4" style="width:60px">
				<br><br>
				<input type="hidden" name="ipg1" id="ipg1" value="<? echo $ipg1 ?>">
				<input type="hidden" name="ipg2" id="ipg2" value="<? echo $ipg2 ?>">
				<input type="hidden" name="ipg3" id="ipg3" value="<? echo $ipg3 ?>">
				<input type="hidden" name="ipg4" id="ipg4" value="<? echo $ipg4 ?>">
				<input type="hidden" name="subnet1" id="subnet1" value="<? echo $subnet1 ?>">
				<input type="hidden" name="subnet2" id="subnet2" value="<? echo $subnet2 ?>">
				<input type="hidden" name="subnet3" id="subnet3" value="<? echo $subnet3 ?>">
				<input type="hidden" name="subnet4" id="subnet4" value="<? echo $subnet4 ?>">
				<input type="hidden" name="int" id="int" value="<? echo $interface ?>">
				<!--<input type="button" formaction="index.php" value="<< Back">-->
				<input type="submit" value="Next >>">
			</form>
			<p><h4><? echo $name; ?> <a href="logout.php"> klik here</a> for logout..</h4></p>
		</center>
	</body>
</html>
