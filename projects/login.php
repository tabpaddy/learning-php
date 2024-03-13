
<?php 
       
        include 'includes/header.php';
    ?>
<div>
    <h1>Log in</h1>
    <p>No account? <a href="register.php">Register here!</a></p>

    <form action = "includes/login-inc.php" method= "post">
        <input type="text" name="username" placeholder="Username">

        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">LOGIN</button>    

    </form>
</div>
    
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
    
    

    
