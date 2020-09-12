<?php
include_once( 'config.php' );
$action = $_POST['action'] ?? '';
$connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}else {
    if('checkvalue'==$action){
        $data_username = $_POST['username']??'';
        $data_password = $_POST['password']??'';
        if($data_username && $data_password){
            $query = "SELECT * FROM `password` WHERE name='{$data_username}'";
            $result = mysqli_query($connection,$query);
            if(mysqli_fetch_row($result)>0){
                $data = mysqli_fetch_assoc($result);
                $_Password = $data['password'];
                if(password_verify($data_password,$_Password)){
                    header("Location: passwordData.php");
                    die();
                }
            }
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
