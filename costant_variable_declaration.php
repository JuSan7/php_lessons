<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constants and Variables Declaration</h1>
    <hr>
    <?php
  //const
  define("NAME","Si Thu");//case sensitive
  echo NAME."<br>";

  define("Greeting", "Hello Welcome to Myanmar!");
  echo Greeting."<br>";

  $text="Hello";//local scope
  $arr =['apple','lemon','blueberry','lichee'];
  define("fruits", $arr);//local scope can call inside function

  function greeting(){
    $message ="Hi Tea!";
    ///echo $text;//can't call in phps
    echo $message."<br>";
    echo fruits[3];
  }
  greeting();


    ?>
</body>
</html>