<?php
    $query = "SELECT * FROM `userdata`";
    $result = mysqli_query($connection,$query); 
?>
<table>
    <thead>
        <tr>
            <th class="center">ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>Comment</th>
            <th>Gender</th>
            <th>Creation Date</th>
            <th>Update Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['website'];?></td>
        <td><?php echo $data['comment'];?></td>
        <td><?php echo $data['gender'];?></td>
        <td><?php echo $data['creationDate'];?></td>
        <td><?php echo $data['updateDate'];?></td>
        <td><a class="update" href="DeleteUpdate.php">Update</a>|<a class="delete" href="DeleteUpdate.php">Delete</a></td>
    </tr>
    <?php
        }
        mysqli_close($connection);
    ?>
    </tbody>
</table>