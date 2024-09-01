 <?php
//  $test = "SESSION EXAMPLE";
//  echo $test;

 session_start();
//  session_destroy();
 $_SESSION['job']="Developer"."<br>";
 echo $_SESSION['job'];
 ?>