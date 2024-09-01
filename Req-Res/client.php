<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client Side</h1>
    <!-- Get Method -->
<!-- <a href="./server.php?name=Jusan&job=Developer">Server Page</a> -->
<hr>
<form action="./server.php" method="post" enctype="multipart/form-data">
   First Name : <input type="text" name="firstName" id="">
   Last Name : <input type="text" name="lastName" id="">

   <select name="Gender" id="">
    <option value="M">Male</option>
    <option value="F">Female</option>
   </select>
   <input type="file" name="myImg" id="">
<button type="submit" name="send">Send</button>
</form>
<br>
<br>
<form action="" method="post" enctype="multipart/form-data">
   <input type="file" name="img" id="">
<button type="submit" name="test">Test</button>
</form>


<?php
if(isset($_POST['test'])){
 $imgName  = $_FILES['img']['name'];
 $tempName  = $_FILES['img']['tmp_name'];

 $target_file  = 'image/'. $imgName;
if(move_uploaded_file($tempName, $target_file)){
    move_uploaded_file($tempName, $target_file);
    echo "Successfully Uploaded....";
}
else{
    echo "Upload Failed...";
}
//  print_r($imgName);
//  print_r($tempName);
}
?>
</body>
</html>