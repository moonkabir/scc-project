<?php include("inc/header.php") ?>
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 registration-form-section">
					<div class="box-login">
						<h2 class="text-center"> LMS | Student Registration</h2>
						<form name="registration" method="post">
							<fieldset>
								<legend>Sign Up</legend>
								<p>Enter your personal details below:</p>
								<div class="form-group">
									<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
								</div>
								<div class="d-flex">
									<div class="form-group col-6">
										<input type="text" class="form-control" name="address" placeholder="Address" required>
									</div>
									<div class="form-group col-6">
										<input type="text" class="form-control" name="city" placeholder="City" required>
									</div>
								</div>
								<div class="form-group d-flex justify-content-center ">
									<label class="block gender">Gender:</label>
									<div class="clip-radio radio-primary">
										<input type="radio" name="gender" value="female" >
										<label for="rg-female">Female</label>
										<input type="radio" name="gender" value="male">
										<label for="rg-male">Male</label>
									</div>
								</div>
								<p>Enter your account details below:</p>
								<div class="form-group">
									<span class="input-icon">
										<input type="email" class="form-control" name="email"  placeholder="Email" required>
										<i class="fa fa-envelope"></i> 
									</span>
									<span id="user-availability-status1" style="font-size:12px;"></span>
								</div>
								<div class="d-flex">
									<div class="form-group col-6">
										<span class="input-icon">
											<input type="password" class="form-control" name="password" placeholder="Password" required>
											<i class="fa fa-lock"></i> 
										</span>
									</div>
									<div class="form-group col-6s">
										<span class="input-icon">
											<input type="password" class="form-control"   name="password_again" placeholder="Password Again" required>
											<i class="fa fa-lock"></i> 
										</span>
									</div>
								</div>
								<div class="form-actions">
									<p>Already have an account?
										<a href="student-login.php">Log-in</a>
									</p>
									<button type="submit" class="btn pull-right"name="submit">
										Submit <i class="fa fa-arrow-circle-right"></i>
									</button>
								</div>
							</fieldset>
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