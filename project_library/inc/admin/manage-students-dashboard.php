<div class="container-fluid container-fullw bg-white doctor-specialization">
    <div class="row">
        <div class="col-md-12 doctor-specialization-list">
            <h5 class="text-center">Your Account</h5>
            <div class="text-right">
                <a class="update" href='admin-student-edit-profile.php'>Update</a> | <a class="update" href='admin-student-delete.php'>Delete</a>
            </div>
            <form method="POST">
                <table class="table table-hover" id="sample-table-1">
                    <thead>
                        <tr>
                            <th class="center">ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Gender</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $data['id'];?></td>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['address'];?></td>
                        <td><?php echo $data['city'];?></td>
                        <td><?php echo $data['gender'];?></td>
                        <td><?php echo $data['email'];?></td>
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