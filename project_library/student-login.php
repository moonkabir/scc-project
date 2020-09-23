<?php
include("inc/header.php");
include("inc/queryfile.php");
?>
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 login-form-section">
					<div class="box-login">
						<h2 class="text-center"> LMS | Student Login</h2>
						<form class="form-login" method="post">
							<fieldset>
								<legend>Sign in to your account</legend>
								<p>Please enter your name and password to log in.<br/></p>
								<div class="form-group">
									<span class="input-icon">
										<input type="email" class="form-control" name="email" placeholder="Enter Your Email">
										<i class="fa fa-email"></i>
										</span>
								</div>
								<div class="form-group form-actions">
									<span class="input-icon">
										<input type="password" class="form-control password" name="password" placeholder="Password">
										<i class="fa fa-lock"></i>
									</span>
								</div>
								<div class="form-actions">
									
									<button type="submit" class="btn pull-right" name="submit">
										Login <i class="fa fa-arrow-circle-right"></i>
									</button>
								</div>
								<div class="new-account">
									<p>Don't have an account yet?</p>
									<a href="student-registration.php">
										Create an account
									</a>
								</div>
							</fieldset>
							<input type="hidden" name="action" value="student-login">
						</form>
						<div class="copyright">
							&copy; <span class="current-year"><?php echo date("Y");?></span><span class="text-bold text-uppercase"> LMS</span>. <span>All rights reserved</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include("inc/footer.php") ?>