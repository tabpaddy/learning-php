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
      //arrayfunction

      $personalInfo = array("name" => "praise", "age" => 21, "city" => "asaba");

      $moreInfo = array("state" => "delta", "weight" => 74);

      $personalInfo = array_merge($personalInfo, $moreInfo);

      foreach ($personalInfo as $key => $value) {
        echo $key . ": " . $value . "<br>";
      }

      print_r($personalInfo);

      echo "<br>";
      //print only keys
      print_r(array_keys($personalInfo));

      echo "<br>";
      //print only values
      print_r(array_values($personalInfo));

      echo "<br>";

      //add a value in value
      $cars = array("golf", "audi", "mazda");

      array_push($cars, "volvo");

      print_r($cars);

      //array search
      echo "<br>";
      echo array_search("golf", $cars);

      //count the number of items in a array
      echo "<br>";
      echo count($cars)
    ?>

</body>
</html>