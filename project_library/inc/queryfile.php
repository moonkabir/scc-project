<?php
session_start();
include_once( 'config.php' );
$action = $_POST['action'] ?? '';
$connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}elseif('admin-login' == $action) {
    $username = $_POST['username']??'';
    $password = $_POST['password']??'';
    if($username && $password){
        $query = "SELECT id,password FROM `admin` WHERE name = '{$username}'";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
            $data = mysqli_fetch_assoc($result);
            $_password = $data['password'];
            $_id = $data['id'];
            if(password_verify($password,$_password)){
                $_SESSION['id'] = $_id;
                header("Location: admin-dashboard.php");
                die();
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


$password = $_POST['password']??'';
$password_again = $_POST['password-again']??'';
if($password == $password_again){
    
}