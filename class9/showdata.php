<?php
    $query = "SELECT * FROM `password`";
    $result = mysqli_query($connection,$query); 
?>
<table>
    <thead>
        <tr>
            <th class="center">ID</th>
            <th>Name</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['password'];?></td>
    </tr>
    <?php
        }
        mysqli_close($connection);
    ?>
    </tbody>
</table>