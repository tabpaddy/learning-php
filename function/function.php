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
     //functions
     function myFunction(){
        $x = "hello";
        // echo "$x";
     }

     myFunction();

     //function with auguments
     //we use parameters to pass an arguement
     $num1 = 5;
     $num2 = 4;
     function calculator($num1, $num2 = 20){
            echo $num1 * $num2 . "<br>";
     }

     //arguments
     calculator($num1);

     //funtions with return value

     //pass by value
      function add($num1, $num2){
        $result = $num1 + $num2;
        return $result;
      }

      echo "the number is: " . add($num1, $num2) . "<br>";

      function sub($num1, $num2){
        $result = $num1 - $num2;
        return $result;
      }

      echo "the number is: " . sub($num1, $num2) . "<br>";

      //add by reference
      $x = 10;
      function addByRefrence(&$x){
        $x += 10;
      }
      
      addByRefrence($x);
      echo "the number is: " . $x . "<br>";
    ?>

</body>
</html>