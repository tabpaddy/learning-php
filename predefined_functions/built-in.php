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
       // build in function

       //string function
       //math function
       //date function
       //array function
       //raNDOM NUMBER FUNCTION

       // MATH FUNCTION

       //ceil
       //rands numbner to the highest nearest number
    //    echo ceil(0.50) . "<br>";


       //floor
       // is rands number to d lowest nearest number
    //    echo floor(0.50) . "<br>";

       //round
       // it surrounds a floating point number
        // echo round(0.8765, 2) . "<br>";
        
        //exponatiasion
        // echo exp(4);

        //string built-in function
        //strlen()
        $str = "today is a sunny day";
        echo strlen($str);

        //string word count
        $surname = "my surname is taborota";
        echo "<br>";
        echo str_word_count($surname);

        //how to find text within a string

        $email = "info@gmail.com";
        echo "<br>";

        if (strpos($email, "@")) {
            echo "this is a valid email";
        }else {
            echo "this is a email input field";
        }

        //Ucword - every fisrt letter of a word is upercase
        echo "<br>";

        echo ucwords("what is your name?" . "<br>") ;

        //whole string to uppercase
        echo strtoupper("what is your name?". "<br>");

        //whole string to lowercase
        echo strtoupper("what is your name?". "<br>");

        

    ?>

</body>
</html>