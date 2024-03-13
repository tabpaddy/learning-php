<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
  
</head>
<body>
    <?php
        //$_files
        //how to upload files
        //1. upload it to the rooy
        //2p dirent ot to the databased
        
       // enctype = "multipart / form data"
       //specifies how the form data should be encoded


    //    echo $names = $_FILES['file']['name'] . "<br>";
    //    echo $type = $_FILES['file']['type'] . "<br>";
    //    echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
    //    echo $error = $_FILES['file']['error'] . "<br>";
       

        
    ?>

<form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">submit</button>
    </form>

</body>
</html>