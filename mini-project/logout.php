<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
    <div class="container mt-4"  >
        <div class="row ">
            <div class="col-3">
                <div class="text-center mb-3">
                <a href="./register.php">
                    <!-- Use btn-dark class instead of bg-dark -->
                    <button class="btn bg-success text-white" style="width:200px">Register</button>
                </a>
                </div>
 
                <div class="text-center mb-3">
                <a href="./login.php">
                    <!-- Use btn-dark class instead of bg-dark -->
                    <button class="btn bg-primary text-white" style="width:200px">Login</button>
                </a>
                </div>
 
                <div class="text-center mb-3">
                <a href="./logout.php">
                    <!-- Use btn-dark class instead of bg-dark -->
                    <button class="btn btn-warning text-white" style="width:200px">Logout</button>
                </a>
                </div>
            </div>
            <div class="col-5">
            <b class="btn btn-success text-white ">
                    Logout Succes
</b>
            </div>
        </div>
    </div>
    <?php
    session_start();
    session_destroy();
     ?>
</body>
</html>
