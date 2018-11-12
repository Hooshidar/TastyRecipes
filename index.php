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
 <body class="body">
     
     
     <header class="mainheader">
         
     <img src="img/logo.gif" alt="toplogo">
         
    <?php
        if (isset($_SESSION['id'])){
            echo $_SESSION['id'];
        } else {
            echo "You are not logged in";   
        }
    ?>
     <nav>
         <ul>
             <li class="active"><a href="index.php">Home</a></li>
             <li><a href="Recipes.php">Recipes</a></li>
             <li><a href="Calender.php">Calender</a></li>
             <li><a href="About.php">About</a></li>
         </ul>
         <ul>
            <li><form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit">Login</button>
                </form>
                
                <form action="loginpage.php" method="POST"><button type="submit">Signup</button></form>
                <form action="logout.php" method="POST"><button type="submit">Logout</button></form>
            </li>
         </ul>
     </nav>
         
     </header>
     
     <div class="maincontent">
        <div class="content">
            <article class="topcontent">
                <header>
                    <h2><a href="Calender.php" title="first post">The Tasty Recipes Calender!</a></h2>
                </header>
                    <p>
                        Welcome to <strong>The Tasty Recipes,</strong> get started by heading to our calender page and set up your own food calender or click the header to get started!
                    </p>
            </article> 
        </div>
     </div>
     
 </body>
</html> 