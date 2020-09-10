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
    <h2>PHP Form Example</h2>
    <form method="POST">  
        Name: <input type="text" name="username" >
        <br><br>
        Password: <input type="password" name="password" >
        <br><br>
        <input type="submit" name="submit" value="Submit">  

        <input type="hidden" name="action" value="password">
    </form>
    <br><br> 
    <?php include('showdata.php');?>
</body>
</html>

