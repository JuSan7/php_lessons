<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task Lists:</h1>
    <a href="./create.php">Create Page</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
        </tr>
        </thead>
        <tbody>
           
            <?php
            require_once('./db_connection.php');
            $sql= "SELECT * FROM work";
            $query=mysqli_query($conn,$sql);
            $totalRow =mysqli_num_rows($query);
            //echo $totalRow;
            // echo "<pre>";
            // var_dump(mysqli_fetch_assoc($query));
           
            while($row = mysqli_fetch_assoc($query)){
               $time = date('d:m:Y g:i:a', strtotime($row['created_at']));
               echo "
                <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                 <td>{$time }</td>
                <td>
                    <a href='./update.php?id={$row['id']}'>Update</a> |
                    <a href='./delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
    ?>
</body>
</html>