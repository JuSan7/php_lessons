<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Database Connection With Code</h1> -->
    <?php
    //hostname,username,password,database name
    $conn=mysqli_connect('localhost','root','','todo_list');
    if(!$conn){
      //die("Connection Failed...");
      echo "Connection Failed". mysqli_connect_error();
    }
    
    ?>
</body>
</html>