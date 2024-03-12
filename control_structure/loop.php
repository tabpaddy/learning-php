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
        //while loop
        $a = 0;
        while ($a <= 10) {
            # code...
            // echo $a . " <br>";
            $a++;
        };
        //do while loop
        //first do, then while

        $cookies = 1;
        do {
            # code...
            // echo "I love cookies <br>";
            $cookies++;
        } while ($cookies <= 10);


        //for loop
        //u know how many times u want to execute the code

        for ($x=1; $x <= 10; $x++) { 
            # code...
            // echo "the number is: ". $x ."<br>";
        }

        //going to the bank on the first of jan
        //went to deposit 1000 dollars
        //interest rate is 5%
        //withdraw is after 5years

        $deposit = 1000;
        $interest = 0.05;

        for ($years=1; $years <= 5 ; $years++) { 
            # code...
            $deposit = ($deposit * $interest) + $deposit;
            //echo "the total amount after ". $years . " year is: " . $deposit . "<br>";
        };
        // foreach loop
        //iterate over array and object varaibles
        $names = array("john", "micheal", "david");

        foreach ($names as $name ) {
            # code...
            echo "my name is " . $name ."<br>";
        };

        $person = array("name" => "praise", "age" => 20, "gender" => "male");

        foreach ($person as $key => $value) {
            # code...
            echo $key . ": " . $value . "<br>";
        };





    ?>

</body>
</html>