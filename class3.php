<?php
// $x=8;

// if($x==6){
//     echo "X is 6";
// }elseif($x==7){
//     echo "X is 7";
// }else{
//     echo "X is not matched";
// }

// switch ($x){
//     case 6:
//         echo "X is 6";
//     break;
//     case 7:
//         echo "X is 7";
//     break;
//     case 8:
//         echo "X is 8";
//     break;
//     default:
//     echo "X is not matched";
// }
// $x=8;
// while($x<10){
//     echo "The number is: $x \n";
//     $x++;
// }

// do {
//     echo "The number is: $x \n";
//     $x++;
// } while ($x<8);


// for ($x = 8; $x <= 10; $x++) {
//     echo "The number is: $x \n";
//     continue;
// }


// $colors = array("red", "green", "blue", "yellow");

// // echo $colors[2];
// foreach($colors as $color){
//     echo "$color \n";
// }


// function moon(){
//     return "my name is Moon Kabir";
// }

// function moon($name = "moon"){
//     return "my name is $name";
// }

// echo moon("Nazrul");
// echo moon();


// echo rand(0,10);


// $colors = array("red", "green", "blue", "yellow");
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo $age["Joe"];



// multidimension array
// $colors = array(
//     array("red", "green", "blue", "yellow"=>array(
//         "Peter"=>"35"
//     ))
// );
// echo $colors[3]["Peter"];

$cars = array("Volvo", "BMW", "Toyota");
echo sort($cars);
print_r($cars);