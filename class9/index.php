<?php


$hash = password_hash("Moon",PASSWORD_BCRYPT);
echo $hash;

echo "<br/>";

// $md5=md5("moon");

// echo $md5;


// $sha1=hash('sha512','moon');
// echo $sha1;









// $hash = password_hash( $adddoctorpassword, PASSWORD_BCRYPT );

// $_password = $data['PASSWORD'];
// password_verify($password, $_password);