<?php
include_once('config.php');
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (!$connection) {
    throw new Exception( "Cannot connect to database" );
}else{
    $students = "SELECT * FROM `students`";
    $resultstudents = mysqli_query($connection,$students);
    $totalstudents = mysqli_num_rows($resultstudents);

    $books = "SELECT * FROM `books`";
    $resultbooks = mysqli_query($connection,$books);
    $totalbooks = mysqli_num_rows($resultbooks);
    
}