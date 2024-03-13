<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    <?php
       //date
       // 'd' = day
       // 'j' = day without zeros
       // 'D' = day of week (3 letters)
       // 'l' = full day of the week
       // 'm' = month as a number with zeros
       // 'n' = month as a number without zeros
       // 'M' = month (3 letters)
       // 'F' = full month
       // 'y' = two-digit year
       // 'Y' = Full year

       echo date('Y/m/d');

       //times
       // 'g' = hours in 12-hours format without zeros
       // 'h' = hpurs in 12-hour format with zeros
       // 'G' = hours in 24-hours format without zeros
       // 'H' = hours in 24-hour format with zeros
       // 'a' = am/pm in lowercase
       // 'A' = am/pm in uppercase
       // 'i' = minutes without leading zeros
       // 's' = seconds without leading zeros

       echo "<br>";

       echo date('H:i:s a');


       //set timezone
       date_default_timezone_set('Nigeria');

       //string to time
       $time = strtotime("10:14pm February 28 2024");
       echo "<br>";
       echo $time;

       //is the timeout stamp is the value represented as second calculated, since unix epoch, jan 1, 1970 and also called a unix timestamp.
       echo "<br>";
       echo date('m/d/Y H:i:s a', $time)


    ?>

</body>
</html>