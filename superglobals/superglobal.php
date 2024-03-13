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
        //superglobals
        //Globals
        //$_post
        //$_GET
        //$_server
        //$_cookie
        //$_session
        //$_files

      //GLOBALS  

        $x = 100;
        $y = 200;

        function add() {

            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

       add();
        echo $z

    ?>

</body>
</html>