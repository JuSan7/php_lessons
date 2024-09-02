<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <br>
    <br>
    <form action="" method="POST">      
        <label for="task">Your Tasks</label>
        <input type="text" name="taskName" id="task" placeholder="Enter task name" require>       
        <button name="add">Create</button>
    </form>

    <?php
    require_once('./db_connection.php');//connect db
    if(isset($_POST['add'])){
      $taskName = $_POST['taskName'];
      if($taskName === "" || $taskName === null){
        echo "<small style='color:red'>Task is required</small>";
      }
      else{
        $sql = "INSERT INTO work (name) VALUES ('$taskName')";
        if(mysqli_query($conn, $sql)){
          //echo "Insert Success";
          header("location:read.php");
        }
        else{
          echo "Insert Fail". mysqli_connect_error();
        }
      } 
    }
    ?>
</body>
</html>