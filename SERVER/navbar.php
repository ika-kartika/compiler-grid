<?
$name=$_SESSION['name'];
?>
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
								<ul class="nav pull-right">
									<li class="">
										<a href="#"><h4><?echo $name;?></h4></a>
									</li>
									<li class="">
										<a href="logout.php"><h4>logout</h4></a>
									</li>    
								</ul>
							</div>
						</div>
					</div>
				</div>