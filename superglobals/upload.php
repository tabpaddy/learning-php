 <?php
        if (isset($_POST['submit'])) {
            $file =$_FILES['file'];
            $name =$_FILES['file']['name'];//find file name
            $tmp_name =$_FILES['file']['tmp_name'];//temp loc
            $size =$_FILES['file']['size'];//find file size
            $error =$_FILES['file']['error'];//find errors

            $tempExtension = explode('.', $name);//explode from puntuation mark

            $fileExtension = strtolower(end($tempExtension));

            //allowed extensions
            $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

            if (in_array($fileExtension, $isAllowed)){
                if ($error === 0) {
                    if ($size < 3000000) {
                        $newFileName = uniqid('', true) . "." . $fileExtension;
                        $fileDestination = "uploads/" . $newFileName;
                        move_uploaded_file($tmp_name, $fileDestination);
                        header("Location: file.php?uploadedsuccess");
                    }else {
                        echo "sorry, your file size is too big!";
                    }
                }else{
                    echo "sorry, there was an error! try it again";
                }
            }else{
                echo "sorry, your file type is not accepted";
            }
        }

        
    ?>
