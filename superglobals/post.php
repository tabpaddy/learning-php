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
        ///post
        //collect data from  the html form(invisible)
        //$_POST is an array when passed
        //isset() is a function to check if something is set
        if (isset($_POST)) {
            echo $_POST['name'] . ", your form is submitted";
        }

        echo"<br>";
        print_r($_POST);
    ?>

<form action="post.php" method="post">
        <input type="text" name="name" id="">
        <input type="text" name="age" id="">
        <button type="submit">submit</button>
    </form>
</body>
</html>