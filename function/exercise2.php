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
    //question 1

    $price = 100;
    $vat = 0.25;

    function calculateVat($price, $vat){
        $calculatedprice = ($price * $vat) + $price;
        return $calculatedprice;
    }

    //echo "price is: " .$price .", vat is: " .$vat .", total price is: ". calculateVat($price, $vat);

    //exercise 2
    $year = 2000;

    function isLeapYear($year){
        if ($year % 400 == 0 || $year % 4 == 0) {
            return true;
        }else {
            return false;
        }
    }

    if (isLeapYear($year)) {
        # code...
        // echo $year. " is a leap year";
    } else {
        # code...
        // echo $year. " is not a leap year";
    }
    

    //question 3
    $num1 = 10;
    $num2 = 6;

    function addNumber($num1, $num2){
        $addition = $num1 + $num2;
        return $addition;
    }
    function subNumber($num1, $num2){
        $subtraction = $num1 - $num2;
        return $subtraction;
    }
    function multiplyNumber($num1, $num2){
        $Multiplicity = $num1 * $num2;
        return $Multiplicity;
    }
    function divideNumber($num1, $num2){
        $division = $num1 / $num2;
        return $division;
    }

    // echo "Addition of " . $num1 . " and " . $num2 . " is " . addNumber($num1, $num2) . "<br>";
    // echo "Subtraction of " . $num1 . " and " . $num2 . " is " . subNumber($num1, $num2) . "<br>";
    // echo "Multiplicity of " . $num1 . " and " . $num2 . " is " . multiplyNumber($num1, $num2) . "<br>";
    // echo "Division of " . $num1 . " and " . $num2 . " is " . divideNumber($num1, $num2) . "<br>";

    //question 4
    function swapNumbers($num1, $num2) {
       $temp = $num1;
       $num1 = $num2;
       $num2 = $temp;
       
       //echo "After swapping num 1 = " . $num1 . " num 2 = " . $num2;
    }

    swapNumbers($num1, $num2);

    //question 5

    function evenOrNot($num1){
        if ($num1 % 2 == 0) {
            # code...
            // print $num1 . " is even";
        } else {
            # code...
            // print $num1 . " is not even";
        }
        
    }

    evenOrNot($num1);

    // question 6

    function isPrime($num1){
        if ($num1 == 1) {
            return false;
        } else {
            for ($i=2; $i < $num1 / 2 ; $i++) { 
                if ($num1 % $i == 0) {
                    return false;
                }
            }
            return 1;
        }
        
    }

    if (isPrime($num1)) {
        echo "this number is a prime";
    } else {
        echo "this number is not a prime";
    }
    
    ?>

    

</body>
</html>