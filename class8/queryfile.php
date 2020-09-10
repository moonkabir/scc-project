<?php
include_once( 'config.php' );
$action = $_POST['action'] ?? '';
$connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}else {
    if ('userdata'==$action) {
        $data_username = $_POST['username']??'';
        $data_email = $_POST['email']??'';
        $data_website = $_POST['website']??'';
        $data_comment = $_POST['comment']??'';
        $data_gender = $_POST["gender"]??'';
        if($data_username && $data_email && $data_website && $data_comment && $data_gender){
            $query = "INSERT INTO `userdata`(`name`, `email`, `website`, `comment`, `gender`) VALUES ('{$data_username}','{$data_email}','{$data_website}','{$data_comment}','{$data_gender}')";
            $result = mysqli_query($connection,$query);
        }
    }elseif('delete'==$action){
        $deleteid = $_POST['id']??'';
        if($deleteid){
            $query = "DELETE FROM `userdata` WHERE id='{$deleteid}'";
            $result = mysqli_query($connection,$query);
        }
    }elseif('update'==$action){
        $updateid = $_POST['id']??'';
        $query = "SELECT * FROM `userdata` WHERE id='{$updateid}'";
        $result = mysqli_query($connection,$query);
        while ($data = mysqli_fetch_assoc($result)) {
            if ($_POST['username']) {
                $username = $_POST['username'];
            }else{
                $username=$data['name'];
            }
            if ($_POST['website']) {
                $website = $_POST['website'];
            }else{
                $website=$data['website'];
            }
            if ($_POST['comment']) {
                $comment = $_POST['comment'];
            }else{
                $comment=$data['comment'];
            }
            if ($_POST['gender']) {
                $gender = $_POST['gender'];
            }else{
                $gender=$data['gender'];
            }
        }
        $updatedata = ($username|| $website || $comment || $gender);
        if($updateid && $updatedata){
        $query = "UPDATE `userdata` SET `name`='{$username}',`website`='{$website}',`comment`='{$comment}',`gender`='{$gender}' WHERE `id`='{$updateid}'";
        $result = mysqli_query($connection,$query);
        }
    }
}



// echo "<pre>Debug: $query</pre>\n";
// $result = mysqli_query($connection, $query);
// if ( false===$result ) {
//     printf("error: %s\n", mysqli_error($connection));
// }
// else {
//     echo 'done.';
// }
// die();
