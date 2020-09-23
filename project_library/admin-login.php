<?php 
include("inc/header.php") ;
include("inc/queryfile.php") ;
?>
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 login-form-section">
					<h2 class="text-center"> LMSP | Admin Login</h2>
					<div class="box-login">
						<form class="form-login" method="post">
							<fieldset>
								<legend>Sign in to your account</legend>
								<p>Please enter your name and password to log in.<br /></p>
								<div class="form-group">
									<span class="input-icon">
										<input type="text" class="form-control" name="username" placeholder="Username">
										<i class="fa fa-user"></i> 
									</span>
								</div>
								<div class="form-group form-actions">
									<span class="input-icon">
										<input type="password" class="form-control password" name="password" placeholder="Password">
										<i class="fa fa-lock"></i>
									</span>
									<a href="#">Forgot Password ?</a>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-primary pull-right" name="submit">
										Login <i class="fa fa-arrow-circle-right"></i>
									</button>
								</div>
							</fieldset>
							<input type="hidden" name="action" value="admin-login">
						</form>
						<div class="copyright">
							&copy; <span class="current-year"><?php echo date("Y");?></span><span class="text-bold text-uppercase"> HMSP</span>. <span>All rights reserved</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include("inc/footer.php") ?> 