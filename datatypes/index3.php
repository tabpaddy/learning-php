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
    //associative array
      $cars = array("audi" => 50.700, "bmw" => 40.700, "mercedes" => 60.700);

    //   var_dump($cars);
    //   echo "<br>";
    //   print_r($cars);

    foreach ($cars as $key => $value) {
        # code...
        echo "My ". $key . " has " . $value . " mileage <br>";
    }
    ?>

</body>
</html>