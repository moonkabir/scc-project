<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>
    <h2>PHP Form Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">  
        Name: <input type="text" name="username" >
        <br><br>
        E-mail: <input type="text" name="email" >
        <br><br>
        Website: <input type="text" name="website" >
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender"value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data_username = $_POST['username'];
        $data_email = $_POST['email'];
        $data_website = $_POST['website'];
        $data_comment = $_POST['comment'];
        $data_gender = $_POST["gender"];
    
        if($data_username&&$data_email&&$data_website&&$data_comment&&$data_gender){
            echo "Your Name is: ".$data_username;
            echo"</br>";
            echo "Your Email is:".$data_email;
            echo"</br>";
            echo "Your Website is: ".$data_website;
            echo"</br>";
            echo "Your Comment is: ".$data_comment;
            echo"</br>";
            echo "Your Gender is: ".$data_gender;
        }else{
            echo "Your Data Missing";
        }
    }
