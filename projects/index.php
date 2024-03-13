<?php 
       
        include 'includes/header.php';
    ?>

<?php 
       
       if (isset($_SESSION['sessionId'])) {
        echo "you are logged in!";
       }else {
        echo "Home";
       }
    ?>
    
<!-- <?php
// $sql = "SELECT * FROM users where id = 7";
// $result = mysqli_query($conn, $sql);//it takes two params one the connection nd the secong the query we want to perform
// $rowCount = mysqli_num_rows($result);//this function return the num of row in a result set and it takes 1 param

// if ($rowCount > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo $row['username']. "<br>";
//     }
// }else {
//     echo "No result found";
// }
?> -->

<?php 
       
        include 'includes/footer.php';
    ?>
    
    

    
