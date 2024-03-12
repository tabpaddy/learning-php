<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datatypes</title>
  
</head>
<body>
    <?php
       //integer = numeric value
       //floating point or float = decimal
       //string
       //booleans
       //array
       //object
       //resource
       //null

       $age = 24;
       echo "my age is: ". $age;

       echo "<br>";

       $price = 10.51;

       echo "the price is: ".  $price; 

       echo "<br>";

       $name = "praise";

       echo "the price is: ".  $name;
       
       echo "<br>";

       $is_allowed = true;
       echo $is_allowed;

       echo "<br>";

       $x = "hello word";
       $x = null;
       echo $x;
       $y;

       echo "<br>";
       echo "<br>";

       $cars1 = "bmw";
        $cars2 = "benz";
        $car3 = "mercedes";
        
        $cars = array("bmw", "benz", "toyota");

        echo $cars[1];

        $car = array("bmw", 2016, 765.40);

        var_dump($car);

        echo "<br>";

        print_r($car);

        echo "<br>";

        $cars4 = array("honda", "benz", "toyota");

        $cars = array_merge($cars, $cars4);

        echo "<br>";

        var_dump($cars);



    ?>


</body>
</html>