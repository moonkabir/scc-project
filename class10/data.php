<?php
include('config.php');
include('queryfile.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>

<body>

    <h2>PHP check login</h2>
    <form method="POST" action="passwordData.php">  
        Name: <input type="text" name="username" >
        <br><br>
        Password: <input type="password" name="password" >
        <br><br>
        <input type="submit" name="submit" value="Submit">  

        <input type="hidden" name="action" value="checkvalue">
    </form>
    <br><br> 

</body>
</html>

