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
       //session
       //good to use for sensitive information
       //session exist as long as the browser is open

       //to start a session we use this function session_start();

       session_start();

       //storing information

       $_SESSION["name"] = "praise";
       $_SESSION["Age"] = 22;

       //session super global is also an array that store value

       echo "hello " . $_SESSION["name"];


       //to destroy seesion
       session_destroy();
       


        
    ?>

</body>
</html>