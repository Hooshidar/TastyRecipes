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
         
   
     <nav>
         <ul>
             <li><a href="index.php">Home</a></li>
             <li><a href="Recipes.php">Recipes</a></li>
             <li><a href="Calender.php">Calender</a></li>
             <li><a href="About.php">About</a></li>
         </ul>
         <ul>
            <li><form action="includes/login.inc.php" method="POST">
                    <input type="text" name="username" placeholder="Username...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <form action="Signuppage.php" method="POST">
                    <button type="submit">Signup</button>
                </form>
                <form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </li>
         </ul>
     </nav>
         
     </header>