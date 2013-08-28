<form class="form-horizontal" method="post" action="proses_tambah_user.php">
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="name">Nama</label>
									<div class="controls">
										<input type="text" class="span3" id="name" name="name">
									</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="password">Password</label>
									<div class="controls">
										<div class="input-prepend">
											<span class="add-on"><i class="icon-lock"></i></span>
											<input class="span2"  type="password" id="password" name="password" >
										</div>
									</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="repassword">Re-enter Password</label>
									<div class="controls">
										<input type="password" class="span3" id="repassword" name="repassword"><span id="pesan2"></span>
									</div>
							</div>
							<div class="control-group">
								<label class="control-label" >Email</label>
									<div class="controls">
										<div class="input-prepend">
											<span class="add-on"><i class="icon-envelope"></i></span>
											<input class="span2"  type="text" id="email" name="email">
										</div>
									</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="phone">Phone Number</label>
									<div class="controls">
										<input type="text" class="span3" id="phone" name="phone">
									</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="address">Address</label>
									<div class="controls">
										<textarea class="input-xlarge" id="address" name="address" rows="3"></textarea>
									</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>