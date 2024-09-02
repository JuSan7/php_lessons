This is delete page.

<?php
require_once('./db_connection.php');
$id =$_GET['id'];
$query ="DELETE from work WHERE id = $id";
if( mysqli_query($conn,$query)){
    //echo "Deleted";
    header("location:read.php");
}
else{
    echo "Delete Failed.";
}

?>