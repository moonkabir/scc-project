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
				<h2>ADMIN | BOOK DELETE </h2>
            </div>
            <section class="login">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 login-form-section">
                            <div class="box-login admin-registration">
                                <form class="form-login" method="post">
                                    <fieldset>
                                        <p>Please enter id for delete book<br /></p>
                                        <div class="form-group">
                                            <span class="input-icon">
                                                <input type="text" class="form-control" name="bookid" placeholder="ID">
                                            </span>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary pull-right" name="submit">
                                                Submit 
                                            </button>
                                        </div>
                                    </fieldset>
                                    <input type="hidden" name="action" value="admin-book-delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</div>
    </div>
</div>
<?php include('inc/footer.php'); ?>