<?php 
session_start();
include('inc/config.php');
include('inc/headerwithoutnav.php');
$_student_id = $_SESSION['id']??0;
if(!$_student_id){
    header('Location: index.php');
    die();
}
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(!$connection){
	throw new Exception("Cannot connect to database");
}
$query = "SELECT * FROM `book_issue` where `student_id` = {$_student_id}";
$result = mysqli_query($connection,$query);
?>
<div class="container-fluid admin-dashboard">
    <div class="row">
		<div class="col-lg-2">
			<?php include('inc/student/sidebar.php'); ?>		
		</div>
		<div class="col-lg-10 doctor-specialization">
			<div class="admin-header d-flex justify-content-between">
				<h2>Student | BOOK ISSUE MANAGE</h2>
			</div>
            <?php include('inc/student/manage-book-issue-dashboard.php'); ?>
		</div>
    </div>
</div>
<?php include('inc/footer.php'); ?>