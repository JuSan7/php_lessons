<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date & Time</h1>
    <hr>
    <?php
    date_default_timezone_set('Asia/Yangon');
    // echo date("d-m-y");
    echo date("d-m-Y h:i:a")."<br>";
    // echo date("d-M-Y h:i");

    $currentDate = date_create(date("d-m-Y"));
    date_add($currentDate, date_interval_create_from_date_string("13 days"));
    //date_sub($currentDate, date_interval_create_from_date_string("13 days"));
    echo date_format($currentDate, "d-m-Y")."<br>";

    echo cal_days_in_month(CAL_GREGORIAN, date('m'), date("Y"));//calculate days in month
    ?>
</body>
</html>