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
        //cookies
        //small files taht the webserver stores in the client computer

        //can have 6 arguments cookies
        //name
        //Value
        //expire
        //path
        //domain
        //security

        $time = time() + 86400 * 30;

        setcookie("name", "dary", $time);

        print_r($_COOKIE);

        echo "<br>";

        echo$_COOKIE('name');

        
    ?>

</body>
</html>