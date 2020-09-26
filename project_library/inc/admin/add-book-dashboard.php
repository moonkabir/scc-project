<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 registration-form-section">
                <div class="box-login admin-registration">
                    <form name="registration" method="post">
                        <fieldset>
                            <legend>Add Book Form</legend>
                            <div class="form-group">
                                <input type="text" class="form-control" name="book_name" placeholder="Book Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="author_name" placeholder="Author Name" required>
                            </div>

                            <div class="d-flex">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" name="edition" placeholder="Edition no" required>
                                </div>
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" name="publication" placeholder="Publication" required>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn pull-right"name="submit">
                                    Submit <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                        <input type="hidden" name="action" value="add-book">
                    </form>
                    <div class="copyright">
                        &copy; <span class="current-year"><?php echo date("Y");?></span><span class="text-bold text-uppercase"> LMS</span>. <span>All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>