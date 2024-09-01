<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    //String
    $name = "ju san";
    echo strlen($name)."<br>";
    echo str_word_count($name)."<br>"; //word count
    echo strrev($name)."<br>";
    echo strpos($name, "San")."<br>"; //return index number(count letter and space)
    echo $name[4].'<br>';
    echo substr($name,0,2)."<br>";
    echo strtolower($name).'<br>';
    echo strtoupper($name).'<br>';
    echo ucwords($name).'<br>'; //Change first letter to Upper

    $text ="<h1><i>Hello barbie world.</i></h1>";
    echo $text.'<br>';

    echo strip_tags($text); //remove html tag
    echo str_replace("barbie", "programming",$text).'<br>';

    $username ="Honey      Mya"; 
    var_dump(trim($username.'<br>'));
    echo trim($username.'<br>');
echo "<pre>";
    var_dump(str_split($username."<br>"));



?>
</body>
</html>