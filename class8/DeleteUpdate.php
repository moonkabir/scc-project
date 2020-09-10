<?php
include("queryfile.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .panel {
            display: none;
        }
    </style>
</head>
<body>

<button class="accordion">Delete</button>
<div class="panel">
    <form method="POST" action="index.php">  
        Id: <input type="text" name="id" >
        <br><br>
        <input type="submit" name="submit" value="Submit">  
        <input type="hidden" name="action" value="delete">
    </form>
</div>
<button class="accordion">Update</button>
<div class="panel">
    <form method="POST" action="index.php">  
        Id: <input type="text" name="id" >
        <br><br>   
        Name: <input type="text" name="username" >
        <br><br>
        Website: <input type="text" name="website" >
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender"value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">  
        <input type="hidden" name="action" value="update">
    </form>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

</body>
</html>




