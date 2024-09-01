<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Server Page";
    // echo "<pre>";
    // var_dump($_REQUEST);
    // var_dump($_REQUEST['job']);

    // echo "<pre>";
    // var_dump($_REQUEST);

    // echo "<pre>";
    // var_dump($_GET);
    // echo "I am {$_GET['firstName']}";

    echo "<pre>";
    var_dump($_POST);
    var_dump($_FILES);
    var_dump($_FILES['myImg']['name']);   
    ?>
</body>
</html>