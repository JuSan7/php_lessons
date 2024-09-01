<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>  
<?php
$errName=$errAddress=$errPhoneNumber=$errEmail="";
$name=$email=$phone=$address="";
    if(isset($_POST['save'])){
        if( $_POST['name'] == null|| $_POST['name']==""&& empty( $_POST['name'])){
          $errName = "Name field require.";
        }
        else{
          $name = $_POST['name'];
        }

        if( $_POST['email'] == null|| $_POST['email']==""&& empty( $_POST['email'])){
          $errEmail = "Email field require.";
        }
        else{
          $email = $_POST['email'];
        }

        if(  $_POST['phone'] == null||  $_POST['phone']==""&& empty(  $_POST['phone'])){
          $errPhoneNumber = "Phone number field require.";    
        }
        else{
          $phone = $_POST['phone'];
        }

        if( $_POST['address'] == null|| $_POST['address']==""&& empty( $_POST['address'])){
          $errAddress = "Address field require.";   
        }
        else{
          $address = $_POST['address'];
        }

        if($name!=""&&$email!=""&&$phone!=""&&$address!=""){
          echo $name."<br>";
          echo $email."<br>";
          echo $phone."<br>";
          echo $address."<br>";
        }
    }
    ?>

<div class="container mt-5"><div class="row"><div class="col-6 offset-3 shadow">
<form action="" method="post">
<div class="my-3 px-5">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control" id="" placeholder="Enter Name">
      <span class="text-danger"><?php echo $errName ?></span>
    </div>

    <div class="my-3 px-5">
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" id="" placeholder="example@gmail.com">
      <span class="text-danger"><?php echo $errEmail ?></span>
    </div>

    <div class="my-3 px-5">
      <label for="">Phone Number</label>
      <input type="number" name="phone" class="form-control" id="" placeholder="Enter phone number">
      <span class="text-danger"><?php echo $errPhoneNumber ?></span>
    </div>

    <div class="my-3 px-5">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="address" cols="65" rows="5" placeholder="Enter address"></textarea>
    <span class="text-danger"><?php echo $errAddress; ?></span>
</div>


    <div class="my-3 px-5 float-end">
      <button type="submit" class="btn bg-dark text-white" name="save">Save</button>
    </div>
</form>   
    </div></div></div>
</body>
</html>