<?php
include_once( 'config.php' );
$connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data_username = $_POST['username']??'';
        $data_email = $_POST['email']??'';
        $data_website = $_POST['website']??'';
        $data_comment = $_POST['comment']??'';
        $data_gender = $_POST["gender"]??'';

        if($data_username && $data_email && $data_website && $data_comment && $data_gender){
        $query = "INSERT INTO `userdata`(`name`, `email`, `website`, `comment`, `gender`) VALUES ('{$data_username}','{$data_email}','{$data_website}','{$data_comment}','{$data_gender}')";
        $result = mysqli_query($connection,$query);
        }else{
            echo "Your Data Is Missing";
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
