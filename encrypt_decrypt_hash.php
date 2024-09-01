<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Encrypt | Decrypt</h1>
    <?php
      $password = 'Jusan';
     $encryptedPassword1 = md5($password);
     $encryptedPassword2 = sha1($password);
     $encryptedPassword3 = crypt($password,'jusan');
     echo $encryptedPassword1."<br>";
     echo $encryptedPassword2."<br>";
     echo $encryptedPassword3."<br>";
    ?>
  <hr>

  <h1>Password Hash</h1>
  <hr>
    <?php
    $pass ="password123";
    $hashPass = password_hash($pass, PASSWORD_BCRYPT);
  
    echo password_hash($pass, PASSWORD_DEFAULT)."<br>";
    echo (password_verify($pass ,$hashPass)?"Same Password":"Not same password");
    ?>
</body>
</html>