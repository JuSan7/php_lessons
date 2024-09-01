<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Email : <input type="email" name="email" id="">
    Password : <input type="password" name="password" id="">
    <button type="submit" name="loginBtn">Login</button>
    </form>
    <?php
    $email = "admin@gmail.com";
    $hashedPassword =password_hash('admin123', PASSWORD_BCRYPT);

    if(isset($_POST['loginBtn'])){
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];  
         
        // echo $userEmail."<br>";
        // echo $hashedPassword."<br>";

        if($email === $userEmail &&  password_verify($userPassword,$hashedPassword)){
            echo "Login Success.";
        }
        else{
            echo "Login Fail.";
        }
    }
    ?>

    
</body>
</html>