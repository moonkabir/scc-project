<?php 
session_start();
$_user_id = $_SESSION['id']??0;
if(!$_user_id){
    header('Location: index.php');
    die();
}
include('inc/headerwithoutnav.php');
include('inc/queryfile.php');
?>
<div class="container-fluid dashboard">
    <div class="row">
		<div class="col-lg-2">
			<?php include('inc/admin/sidebar.php'); ?>		
		</div>
		<div class="col-lg-9">
			<div class="admin-header d-flex justify-content-between">
				<h2> Admin | Student Registration Dashboard</h2>
			</div>
			<div class="row dashboard-manage">
				<?php include('inc/admin/student-registration-dashboard.php'); ?>
			</div>
		</div>
    </div>
</div>
<?php include('inc/footer.php'); ?>