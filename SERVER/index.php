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
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootsrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<a class="brand" href="./index.html">Free C/C++ Compiler </a>
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li class="">
										<a href="#"></a>
									</li>
									<li class="">
										<a href="#"></a>
									</li>    
								</ul>
							</div>
						</div>
					</div>
				</div>
				<p><h2><center>Welcome To Free C/C++ Compiler...<center></h2></p>			
			</div>
			
			<div class="row" style="padding-top: 15px">
				<div class="span6">
					<p><h3>Login Form</h3></p>
					<div class="well">
					<?
					include ('form_login.php');
					?>
					</div>
				</div>
				<div class="span6">
					<p><h3>Register Now..</h3></p>
					<div class="well">
					<?
					include ('form_pendaftaran.php');
					?>
					</div>
				</div>
			</div>
			<footer>
				<center><p>&copy; Ika Kartika Sari 2013</p></center>
			</footer>
		</div>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>