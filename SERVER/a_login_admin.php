<?php

    //mulai session
        session_start();
    //cek apakah user masih aktif login
    if(isset($_SESSION['name']))
    {
       $y = $_SESSION['hak_akses'];
        switch($y)
        {
            case 'client':
                header('Location:u_home.php');
                break;

            case 'admin':
                header('Location:a_panel_admin.php');
                break;
        }
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
				<p><h2><center>Login Admin ...</center></h2></p>			
			</div>
			
			<div class="row" style="padding-top: 55px;">
				<div class="span3">
					<font color="white">
						kiri
					</font>
				</div>
				<div class="span6">
					<p><h3>Login Form</h3></p>
					<div class="well">
					<?
					include ('form_login.php');
					?>
					</div>
				</div>
				<div class="span3">
					<font color="white">
						kanan
					</font>
				</div>
			</div>
			<div class="row" style="padding-top: 150px;">
			<?
			include ('footer.php');
			?>
			</div>
		</div>
	<script type="text/javascript" src="/ta/js/bootstrap.js"></script>
	</body>
</html>