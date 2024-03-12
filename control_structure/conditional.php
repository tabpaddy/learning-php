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
    // conditional statement
    //if statement
    //else statement
    //else if statement
    //switch statement

    // $age = 17;

    // if ($age < 20) {
    //     # code...
    //     echo "sorry you are too young"
    // }elseif ($age > 50) {
    //     # code...
    //     echo "you are too old to drink"
    // } else {
    //     # code...
    //     echo " you are old enough to start"
    // }

    //switch statement
    $role = "visit";

    switch ($role) {
        case 'visitor':
            # code...
            echo "welcome visitor";
            break;
        case 'Admin':
            # code...
            echo "welcome Admin";
            break;
        case 'Superadmin':
            # code...
            echo "welcome Superadmin";
            break;
        case 'Boss':
            # code...
            echo "welcome Boss";
            break;
        
        default:
            # code...
            echo "user not valid";
            break;
    }
    ?>

</body>
</html>