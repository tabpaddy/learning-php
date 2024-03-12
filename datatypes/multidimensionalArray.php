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
    //multidimensional array
      

    //expensive cars
    //audi, mercedes, bmw

    //inexpensive
    //volvo, ford, toyota
    $cars = array(
        "expensive" => array("audi", "mercedes", "bmw"),
        "inexpensive" => array("volvo", "ford", "toyota")
    );

    echo $cars["expensive"][0];
    echo "<br>";
    echo "<br>";
    echo $cars["inexpensive"][2];

    ?>

</body>
</html>