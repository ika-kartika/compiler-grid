<?
        session_start();
		if (!isset($_SESSION['name'])) {
			header('Location: a_login_admin.php');
			}
			include ('connect.php');
			$q_lihat_idle="select idle_value from processor";
			$s_lihat_idle=oci_parse($c,$q_lihat_idle);
			oci_execute($s_lihat_idle);
			$idle = oci_fetch_array($s_lihat_idle,OCI_BOTH);
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
		<?
			include ('navbar.php');
		?>
		<div class="row">
				<p><h2><center>Welcome To Admin Area...</center></h2></p>			
		</div>
		<div class="row" style="padding-top: 20px">
			<div class="well">
			    <div class="tabbable tabs-left">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#lA" data-toggle="tab">Manage Grid Computer</a></li>
						<li class=""><a href="#lB" data-toggle="tab">Add Idle Value Processor</a></li>
						<li class=""><a href="#lC" data-toggle="tab">Manage Admin</a></li>
						<li class=""><a href="#lD" data-toggle="tab">Manage User</a></li>
						<li class=""><a href="#lE" data-toggle="tab">Other</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="lA">
							<?
							include ('a_tabel_grid.php');
							?>
						</div>
						<div class="tab-pane" id="lB">
						<p><H4>Input idle value processor in here..</h4><BR>
								Now, idle value processor is <?echo $idle[0];?> %</p>
							<form class="form-horizontal" method="post" action="proses_update_idle.php">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="parameter">Idle Value</label>
										<div class="controls">
											<input type="text" class="input-xlarge" id="parameter" name="parameter">
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save</button>
										<button class="btn">Cancel</button>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="tab-pane" id="lC">
							<?
							include ('a_tabel_admin.php');
							?>
						</div>
						<div class="tab-pane" id="lD">
							<?
							include ('a_tabel_user.php');
							?>
						</div>
						<div class="tab-pane" id="lE">
							<?
							include ('a_tabel_file.php');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="row">
			<?
			include ('footer.php');
			?>
			</div>
		</div>
	<script type="text/javascript" src="/ta/js/bootstrap.js"></script>
	</body>
</html>