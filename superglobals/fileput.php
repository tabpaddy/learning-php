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
    if (isset($_POST['submit'])) {
        $myfile = fopen("uploads/file.txt", "a");

        $txt =  $_POST['age'] . "\n";

        fwrite($myfile, $txt);

        //to close a file
        fclose($myfile);
    }


 

        // echo $myfile;

        
    ?>

<form action="fileput.php" method="post">
        <input type="text" name="age">
        <input type="submit" name="submit">
    </form>

</body>
</html>