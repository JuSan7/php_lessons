<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class=""> 
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
               <div class="card">    
                <div class="card-body">
                Login
                <form action="" method="POST">
                <div class="mb-2">
                <label for="">Email:</label>
                <input type="email" name="email" id="" class="form-control">
                </div>

                <div class="mb-2">
                <label for="">Password:</label>
                <input type="password" name="password" id="" class="form-control">
                </div>
   
              <button type="submit" class="btn btn-dark text-white float-end" name="login">Login</button>
               
               </form>
                </div>
               </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['login'])){
        $userEmail = $_POST['email'];
        $userPassword=$_POST['password'];
        session_start();     
    
        if($userEmail === $_SESSION['email'] && password_verify($userPassword,$_SESSION['password'])){
            echo "Login Success";
        }
        else{
            echo "Login Failed";
        }

    }
    ?>

</body>
</html>
