<?php 
session_start();
include('inc/headerwithoutnav.php');
include('inc/queryfile.php');
$_user_id = $_SESSION['id']??0;
if(!$_user_id){
    header('Location: index.php');
    die();
}
?>
<div class="container-fluid admin-dashboard">
    <div class="row">
		<div class="col-lg-2">
			<?php include('inc/admin/sidebar.php'); ?>		
		</div>
		<div class="col-lg-9">
			<div class="admin-header d-flex justify-content-between">
				<h2>ADMIN | EDIT STUDENT PROFILE</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 edit-doctor-specialization">
						<div class="panel panel-white">
							<div class="panel-heading">
								<h5 class="panel-title text-center">Edit Profile</h5>
							</div>
							<div class="panel-body">
								<form class="edit-student-form" role="form" name="dcotorspcl" method="post" >
									<div class="form-group">
										<input type="text" name="studentid" class="form-control"  placeholder="Enter student Id">
										<input type="text" name="editstudentname" class="form-control"  placeholder="Edit student Name">
										<input type="text" name="editstudentaddress" class="form-control"  placeholder="Edit student Address">
										<input type="text" name="editstudentcity" class="form-control"  placeholder="Edit student City">
										<input type="text" name="editstudentpassword" class="form-control"  placeholder="Edit student Password">
									</div>
									<button id="editdoctorspecilization" type="submit" name="submit" class="btn btn-o btn-primary">Submit</button>
									<input type="hidden" name="action" value="admin-edit-student-profile">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>	
</div>
<?php include('inc/footer.php'); ?>


