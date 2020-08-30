<?php

// for($i=1;$i<=10;$i++){
//     for($j=1;$j<=$i;$j++){
//     echo "*";
//     }
//     echo PHP_EOL;
//     echo "<br>";
// }

// $cars = array (
//     array("Volvo",22),
//     array("BMW",15),
//     array("Saab",5),
//     array("Land Rover",17),
//     array(
//        array("Audi",10)
//     )
// );

// echo $cars[0][0];

// $moon = array(
//     array("Volvo",22),
//     array(
//         array("Audi",10),
//         array(
//             array("BMW",15)
//         )
//     )
// );
// echo $moon[1][1][0][0];

// $x = 75;
// $y = 25; 

// function addition() {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// addition();
// echo $z;


// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>


<?php

$name=$_REQUEST['fname'];
echo $name;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $name = htmlspecialchars($_REQUEST['fname']);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
//     }
// }