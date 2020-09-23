<?php
session_start();
include_once( 'config.php' );
$action = $_POST['action'] ?? '';
$connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME );
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}else{
    if('admin-login' == $action) {
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
    elseif('student-registration' == $action){
        $full_name = $_POST['full_name']??'';
        $address = $_POST['address']??'';
        $city = $_POST['city']??'';
        $gender = $_POST['gender']??'';
        $email = $_POST['email']??'';
        $password = $_POST['password']??'';
        $password_again = $_POST['password_again']??'';
        if($password == $password_again){
            $hash_pass = password_hash($password,PASSWORD_BCRYPT);
        }
        if($full_name && $address && $city && $gender && $email && $hash_pass){
            $query = "INSERT INTO `students`(`name`, `address`, `city`, `gender`,`email`, `password`) VALUES ('{$full_name}','{$address}','{$city}','{$gender}','{$email}','{$hash_pass}')";
            mysqli_query($connection,$query);
        }
        header('Location: index.php');
    }
    elseif('student-login' == $action) {
        $email = $_POST['email']??'';
        $password = $_POST['password']??'';
        if($email && $password){
            $query = "SELECT id,password FROM `students` WHERE email = '{$email}'";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                $data = mysqli_fetch_assoc($result);
                $_password = $data['password'];
                $_id = $data['id'];
                if(password_verify($password,$_password)){
                    $_SESSION['id'] = $_id;
                    header("Location: student-dashboard.php");
                    die();
                }
            }
        }
    }
    elseif('edit-student-profile' == $action){
        $_student_id = $_SESSION['id'];
        $query = "SELECT * FROM `students` WHERE id = '{$_student_id}'";
        $result = mysqli_query($connection,$query);
        while($data = mysqli_fetch_assoc($result)){
            if($_POST['editstudentname']){
                $editstudentname = $_POST['editstudentname'];
            }else{
                $editstudentname = $data['name'];
            }
            if ($_POST['editstudentaddress']) {
                $editstudentaddress = $_POST['editstudentaddress'];
            }else{
                $editstudentaddress=$data['address'];
            }
            if ($_POST['editstudentcity']) {
                $editstudentcity = $_POST['editstudentcity'];
            }else{
                $editstudentcity=$data['city'];
            }
            if ($_POST['editstudentpassword']) {
                $editstudentpassword = password_hash($_POST['editstudentpassword'],PASSWORD_BCRYPT) ;
            }
            else{
                $editstudentpassword=$data['password'];
            }
        }
        $updatedata = ($editstudentname|| $editstudentaddress || $editstudentcity || $editstudentpassword);
        if($_student_id && $updatedata){
            $query = "UPDATE `students` SET `name`='{$editstudentname}',`address`='{$editstudentaddress}',`city`='{$editstudentcity}',`password`='{$editstudentpassword}' WHERE `id` = '{$_student_id}'";
            $result = mysqli_query($connection,$query);
        }
        header( 'Location: student-profile.php' );
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