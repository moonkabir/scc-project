<div class="container-fluid container-fullw bg-white doctor-specialization">
    <div class="row">
        <div class="col-md-12 doctor-specialization-list">
            <h5 class="text-center">Your Account</h5>
            <div class="text-right">
                <a class="update" href='admin-book-issue.php'>Issue</a> | <a class="update" href='admin-book-edit.php'>Update</a> | <a class="update" href='admin-book-delete.php'>Delete</a>
            </div>
            <form method="POST">
                <table class="table table-hover" id="sample-table-1">
                    <thead>
                        <tr>
                            <th class="center">ID</th>
                            <th>Book Name</th>
                            <th>Author Name</th>
                            <th class="center">Edition</th>
                            <th>Publication</th>
                            <th>Adding Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while ($data = mysqli_fetch_assoc($result)) {
                          
                    ?>
                    <tr>
                        <td><?php echo $data['id'];?></td>
                        <td><?php echo $data['book_name'];?></td>
                        <td><?php echo $data['author'];?></td>
                        <td><?php echo $data['edition'];?></td>
                        <td><?php echo $data['publication'];?></td>
                        <td><?php echo $data['adding_date'];?></td>
                    </tr>
                    <?php
                        }
                        mysqli_close($connection);
                    ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>