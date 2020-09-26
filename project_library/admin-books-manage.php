<?php 
session_start();
include('inc/config.php');
include('inc/headerwithoutnav.php');
$_user_id = $_SESSION['id']??0;
if(!$_user_id){
    header('Location: index.php');
    die();
}
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(!$connection){
	throw new Exception("Cannot connect to database");
}
$query = "SELECT * FROM `books`";
$result = mysqli_query($connection,$query);
?>
<div class="container-fluid admin-dashboard">
    <div class="row">
		<div class="col-lg-2">
			<?php include('inc/admin/sidebar.php'); ?>		
		</div>
		<div class="col-lg-9 doctor-specialization">
			<div class="admin-header d-flex justify-content-between">
				<h2>ADMIN | BOOKS MANAGE ACCOUNT</h2>
			</div>
            <?php include('inc/admin/manage-books-dashboard.php'); ?>
		</div>
    </div>
</div>
<?php include('inc/footer.php'); ?>