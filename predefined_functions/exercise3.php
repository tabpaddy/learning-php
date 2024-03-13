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
        //question1
        $numbers = array("milk" => 4, "groundnut" => 2, "bread" => 7);
         arsort($numbers);

        print_r($numbers);

        echo "ans 1 <br>";


        //question2
        $targetdays = mktime(0, 0, 0, 10, 18, 2024);

        $today = time();

        $differencedays = ($targetdays - $today);

        $days = (int)($differencedays / 86400);

        echo "days till next birthday: " . $days . " days!";

        echo "  ans 2 <br>";

        //question 3
        $randNumber = rand(0, 100) / 10;

        echo $randNumber;

        echo "  ans 3 <br>";

        //question 4

        $str = "My name is Praise, I'm 21 years old and i live in nigeria. I'm actually getting old. I like PHP; because its a programing language";

        function lowercaseCheck($str){
            echo strtolower($str);
        }

        lowercaseCheck($str);

        echo "  ans 4 <br>";

        //question 5

        $punctuation = 0;

        function searchText($str, $punctuation){
            for ($i=0; $i < strlen($str) ; $i++) { 
                if ($str[$i] == ".") {
                    $punctuation++;
                }
            }
            echo "the text has " . $punctuation . " punctuation";
        }

        searchText($str, $punctuation);

        echo "  ans 5 <br>";

        //question 6
        $onlyNumbers = array(8, 4, 6, 3, 9, 45,36, 90,3, 55);

        echo "the lowest value is " . min($onlyNumbers) . " and the highest value is " . max($onlyNumbers);

        echo "  ans 6 <br>";

        //question 7

        $sttr = "my name is praise";
         echo str_repeat($sttr, 8). " ans 7 <br>"
    ?>

</body>
</html>