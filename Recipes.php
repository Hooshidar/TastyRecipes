<?php
    session_start();
?>
<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>The Tasty Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
 </head>
 <body class="body">
     
     <header class="mainheader">
         
     <img src="img/logo.gif" alt="toplogo">
     
     <nav>
         <ul>
             <li><a href="index.php">Home</a></li>
             <li class="active"><a href="Recipes.php">Recipes</a></li>
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
                    <h2><a href="Pancakes.php" title="first post">Pancakes</a></h2>
                    <h2><a href="Meatballs.php" title="first post">Meatballs</a></h2>
                </header>
            </article> 
        </div>
     </div>
     
 </body>
</html> 