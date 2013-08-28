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
$ipg=$ipg1.".".$ipg2.".".$ipg3.".".$ipg4;
$ips1=$_POST['ips1'];
$ips2=$_POST['ips2'];
$ips3=$_POST['ips3'];
$ips4=$_POST['ips4'];
$ips=$ips1.".".$ips2.".".$ips3.".".$ips4;
$subnet1=$_POST['subnet1'];
$subnet2=$_POST['subnet3'];
$subnet3=$_POST['subnet3'];
$subnet4=$_POST['subnet4'];
$subnet=$subnet1.".".$subnet2.".".$subnet3.".".$subnet4;
$interface=$_POST['int'];
?>
<html>
	<head>
		<title>
		Free C/C++ Compiler
		</title>
	</head>
	<body>
		<center>
		<h3>Activity Review..</h3>
		<h4> 
		IP Address Grid Computer : <? echo $ipg; ?> <br>
		Subnet Grid Computer : <? echo $subnet; ?> <br>
		Interface Grid Computer : <? echo $interface; ?> <br>
		IP Address Server : <? echo $ips; ?>
		</h4> <br>
		<form method="post" action="addip.php">
			<input type="hidden" name="ipadds" id="ipadds" value="<? echo $ips ?>">
			<input type="hidden" name="ipadd" id="ipadd" value="<? echo $ipg ?>">
			<input type="hidden" name="subnet" id="subnet" value="<? echo $subnet ?>">
			<input type="hidden" name="int" id="int" value="<? echo $interface ?>">
			<input type="submit" value="Submit">
		</form>
		<p><h4><? echo $name; ?> <a href="logout.php"> klik here</a> for logout..</h4></p>
		</center>
	</body>
</html>
