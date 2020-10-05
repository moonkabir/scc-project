<?php 
session_start();
include('inc/queryfile.php');
include('inc/headerwithoutnav.php');
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
		<div class="col-lg-9 doctor-specialization">
			<div class="admin-header d-flex justify-content-between">
				<h2>ADMIN | BOOK ISSUE</h2>
			</div>
            <?php include('inc/admin/issue-books-dashboard.php'); ?>
		</div>
    </div>
</div>
<?php include('inc/footer.php'); ?>