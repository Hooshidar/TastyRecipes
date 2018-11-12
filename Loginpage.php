<?php
    session_start();
?>

<!DOCTYPE html>
<html>
 <head>
    <link property="resetsheet" href="resetsheet.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>The Tasty Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
 </head>
 <body>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit">LOGIN</button>
    </form>
    <?php
        if (isset($_SESSION['id'])){
            echo $_SESSION['id'];
        } else {
            echo "You are not logged in";   
        }
    ?>
    <br><br><br>
    <form action="signup.php" method="POST">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="lastname" placeholder="Lastname">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit">SIGN UP</button>
    </form>
     <form action="logout.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
 </body>
</html> 