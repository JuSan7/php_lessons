<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h3>Array Build-In Function</h3>
<hr>
<?php

//Math
// echo pow(2,2)."<br>";
// echo sqrt(9)."<br>";
// echo abs(-9)."<br>"; //ouput as plus
// echo ceil(9.1)."<br>";
// echo floor(9.1)."<br>";
// echo rand(1,10)."<br>";
// echo round(0.5)."<br>";
// echo round(0.1)."<br>";

// //Array
//$arr =[2,4,6,7,8,9,0];
// echo max($arr)."<br>";
// echo min($arr)."<br>";


//$fruits =['apple','lemon','blueberry','lichee',10,20,29];
// echo count($fruits);
// echo current($fruits)."<br>";
// echo end($fruits)."<br>";

// echo $fruits[array_rand($fruits)]."<br>"; //random index from array
// echo  array_sum($fruits)."<br>";

// $numbers =range(0,12);
// echo "<pre>";
// var_dump($numbers)."<br>";

// echo (in_array('apple',$fruits)?"true":"false")."<br>";//search element in array

// //associated array
// $person=[
//     'name'=>'Kyaw Kyaw',
//     'age'=>45
// ];
// echo (array_key_exists('name',$person)?"true":"false")."<br>";
// echo "<pre>";
// var_dump(array_keys($person))."<br>";
// echo "<pre>";
// var_dump(array_values($person))."<br>";


// $text="Hello welcome to America";
// echo "<pre>";
// var_dump(explode(" ",$text))."<br>";//str to array


$fruits =['apple','lemon','blueberry','lichee'];
// echo "<pre>";
// var_dump(implode(",",$fruits))."<br>";//arr to str
// var_dump(join("|",$fruits))."<br>";//arr to str

// array_push($fruits,'pineapple');//last add
// echo "<pre>";
// var_dump($fruits)."<br>";


// array_unshift($fruits,'mango');//first add
// echo "<pre>";
// var_dump($fruits)."<br>";

// array_pop($fruits);//remove last
// array_shift($fruits);//remove first
// echo "<pre>";
// var_dump($fruits)."<br>";

// $nums = [1, 4, 0, 3, 6, 2, 9];
// sort($nums);
// for ($i = 0; $i < count($nums); $i++) {
//     echo $nums[$i]; 
//     echo "<br>";
// }


$user =[
    'name'=> "sithu", 
    'job'=>"developer",
    'address'=>"yangon"
];

// asort($user);//sorted by value
// echo "<pre>";
// var_dump($user);

// ksort($user);//sorted by key
// echo "<pre>";
// var_dump($user);

// arsort($user);//sorted by value (desc)
// echo "<pre>";
// var_dump($user);

// krsort($user);//sorted by key (desc)
// echo "<pre>";
// var_dump($user);

//random change index of array
shuffle($user); 
echo "<pre>";
var_dump($user);

shuffle($fruits);
echo "<pre>";
var_dump($fruits);
?>
</body>
</html>