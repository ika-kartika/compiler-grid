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
				<p><h2><center>Register Your Grid Computer In Here..</center></h2></p>			
		</div>
		<div class="row" style="padding-top : 30px">
		<div class="span2">
			<font color="white">
						kiri
			</font>
		</div>
		<div class="span8">
			<form class="well form-horizontal" method="post" action="proses_tambah_computer.php">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Computer Name </label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="name" name="name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="ip">IP Address</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="ip" name="ip">
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save</button>
						<button class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="span2">
			<font color="white">
						kanan
			</font>
		</div>
		</div>
	  <?
			include ('footer.php');
			?>
		</div>
	<script type="text/javascript" src="/ta/js/bootstrap.js"></script>
	</body>
</html>