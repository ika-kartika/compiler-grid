<?
        session_start();
		if (!isset($_SESSION['name'])) {
			header('Location: index.php');
			}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Free C/C++ Compiler
		</title>
		<link rel="stylesheet" type="text/css" href="/ta/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/ta/css/bootsrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="/ta/css/style.css">
		<script type="text/javascript" src="/ta/js/jquery.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?
				include ('navbar.php');
				?>
				<p><h2><center>Welcome To Free C/C++ Compiler...<center></h2></p>
				<p><h4><center>
					Write and compile your C/C++ code in here...<br>
					You will get your executable file if your code is correct<br>
					or you will get the error notification if the system detect error in your code. 
				</center></h4></p>
			</div>
			
			<div class="row" style="padding-top: 5px">
				
				<div class="well">
				<?
				include ('u_form_editor.php');
				?>
				</div>
			</div>
			<?
			include ('footer.php');
			?>
		</div>
	<script type="text/javascript" src="/ta/js/bootstrap.js"></script>
	</body>
</html>