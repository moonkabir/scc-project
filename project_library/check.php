<?php

include('inc/config.php');
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(!$connection){
	throw new Exception("Cannot connect to database");
}
$query = "SELECT * FROM `book_issue` where id = '1'";
$result = mysqli_query($connection,$query);
while ($data = mysqli_fetch_assoc($result)) {
    $book_issue_date = $data['return_date'];
    echo $book_issue_date;
}
echo "<br>";

$book_issue_date = strtotime($book_issue_date);
echo $book_issue_date;
echo "<br>";

$current_date = strtotime("now");
echo $current_date;
echo "<br>";

$diff_time = $current_date - $book_issue_date;
echo $diff_time;
if($book_issue_date>=$current_date){
    echo "no Fine";
}elseif($diff_time<86400){
    echo"You must have to pay 100 taka";
}elseif($diff_time<432000){
    echo"You must have to pay 300 taka";
}elseif($diff_time<864000){
    echo"You must have to pay 800 taka";
}else{
    echo "pay 1000";
}

