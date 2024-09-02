<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once('./db_connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM work WHERE id = $id";
$query = mysqli_query($conn,$sql);
echo "<pre>";
$data = mysqli_fetch_assoc($query); //get data
// var_dump($data);
if(isset($_POST['update'])){
    $taskName = $_POST['name'];
    
    if($taskName === null || $taskName === ""){
        echo "<small style='color:red'>Task name is required. </small>";
    }
    else{
         $sql = "UPDATE work SET name = '$taskName' WHERE id = '$id'";
      if( mysqli_query($conn,$sql)){
        header('location:read.php');
      }
      else{
        echo "Update Failed.";
      }
    }
}
?>   

<form action="" method="post">
    <a href="./read.php">Read Page</a> 
    Tasks 
   <input type="text" name="name" id="" value="<?php echo $data['name']; ?>">      
   <button name="update">Update</button>
    <input type="hidden" name="id" id="" value="<?php echo $data['id']; ?>">      
</form>

</body>
</html>