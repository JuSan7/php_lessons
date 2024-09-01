<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
     $test = "Get data from session";
     echo $test."<br>";

    session_start();
    echo  $_SESSION['job'];
    ?>
</body>
</html>