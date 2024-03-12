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
    // question 1
    //   $x = 4;
    //   $y = 6;

    //   $z = ($x + $y) * 5;
    //   echo "the total is " . $z

    //question 2
    // $price = 200;
    // $vat = 0.25;

    // $totalprice = ($price * $vat) + $price;

    // echo "Price: " . $price . "<br>";
    // echo "vat: " . $vat . "<br>";
    // echo "total price: " . $totalprice . "<br>";

    //question 3
    // $x = 4;
    // $y = 6;
    // $z = 9;

    // $average = ($x + $y + $z) / 3;

    // echo number_format($average, 2, ',', ' ');

    //question 4
    // $countries = array(
    //     "nigeria" => "abuja",
    //     "ghana" => "accra",
    //     "usa" => "new york",
    //     "germany" => "berlin",
    //     "canada" => "toronto",
    // );

    // foreach ($countries as $key => $value) {
    //     # code...
    //     echo "the capital of ". $key . " is " . $value;
    //     echo "<br>";
    // }

    //question 5
    // $cm = 150;
    
    // $cmToInch = 0.39;

    // echo $cm . " centimeters is " . $cmToInch . " inch";


    //question 6
    
    // $expenses = array(40, 50, 30, 97, 82);

    // $totalAmount = 0;
    // $amountOfExpenses = 0;

    // foreach ($expenses as $expense) {
    //     # code...
    //     $totalAmount = $expense + $totalAmount;
    //     $amountOfExpenses = $amountOfExpenses + 1;
    // }

    // echo "my " . $amountOfExpenses . " biggest expenses were " . $totalAmount

    //question 7
     $weather = array("rain", "sunshine", "clouds", "hail", 'sleet', "snow", "wind");

     echo " we've seen all kinds of weather this month. at the beginning of the month, we had ". $weather[5]. " and " . $weather[6] . " then came " . $weather[1] . " wth a few " . $weather[2] . " and some " . $weather[0] . ". At least we didnt get any " . $weather[3] . " or " . $weather[4];
    ?>

</body>
</html>