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
<style>
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>
<body>
    <h2>PHP Form Example</h2>
    <form method="POST">  
        Name: <input type="text" name="username" >
        <br><br>
        E-mail: <input type="email" name="email" >
        <br><br>
        Website: <input type="text" name="website" >
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender"value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">  

        <input type="hidden" name="action" value="userdata">
    </form>
    <br><br> 
    <?php include('showdata.php');?>
</body>
</html>

