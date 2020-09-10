<?php
include_once( 'config.php' );
$action = $_POST['action'] ?? '';
$connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}else {
    if ('password'==$action) {
        $data_username = $_POST['username']??'';
        $data_password = $_POST['password']??'';
        $password_hash = password_hash($data_password,PASSWORD_BCRYPT);
        if($data_username && $password_hash){
            $query = "INSERT INTO `password`(`name`, `password`) VALUES ('{$data_username}','{$password_hash}')";
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
