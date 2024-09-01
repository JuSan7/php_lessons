<?php

$cars = ['suzuki','demio','mercedez','neta'];
echo count($cars)."<br>"; //array's length

// for($i=0; $i<count($cars);$i++){
//     echo $cars[$i]."<br>";
// }

// foreach($cars as $car){
// echo $car."<br>";
// }

// $num = 11;
// while($num<=10){
//     echo $num."<br>";
//     $num++;
// }

// do{
//     echo $num."<br>";
//     $num++;
// }while($num<=10);

function generateText($text="HI"){
    echo $text;
}
// generateText("HELLO WORLD!");
generateText();

?>