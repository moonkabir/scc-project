<div class="container-fluid container-fullw bg-white doctor-specialization">
    <div class="row">
        <div class="col-md-12 doctor-specialization-list">
            <h5 class="text-center">Your Account</h5>
            <form method="POST">
                <table class="table table-hover" id="sample-table-1">
                    <thead>
                        <tr>
                            <th class="center">ID</th>
                            <th>Book Name</th>
                            <th>Book ID</th>
                            <th>Book Author</th>
                            <th>Book Edition</th>
                            <th>Book Publication</th>
                            <th>Student Email</th>
                            <th>Issue Date</th>
                            <th>return Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while ($data = mysqli_fetch_assoc($result)) {

                            if('1' == $data['book_edition']){
                                $edition = $data['book_edition']."st";
                            }elseif('2' == $data['book_edition']){
                                $edition = $data['book_edition']."nd";
                            }elseif('3' == $data['book_edition']){
                                $edition = $data['book_edition']."rd";
                            }else{
                                $edition = $data['book_edition']."th";
                            }
                    ?>
                    <tr>
                        <td><?php echo $data['id'];?></td>
                        <td><?php echo $data['book_name'];?></td>
                        <td><?php echo $data['book_id'];?></td>
                        <td><?php echo $data['book_author'];?></td>
                        <td><?php echo $edition;?></td>
                        <td><?php echo $data['book_publication'];?></td>
                        <td><?php echo $data['student_mail'];?></td>
                        <td><?php echo $data['issue_date'];?></td>
                        <td><?php echo $data['return_date'];?></td>
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