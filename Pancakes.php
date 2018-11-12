<?php
    include 'dba.inc.php';
    include 'comments.inc.php';
    session_start();
    date_default_timezone_set('Europe/Stockholm');
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <link rel="stylesheet" href="recipes.css">
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
                    <button type="submit">LOGIN</button>
                </form>
                
                <form action="loginpage.php" method="POST"><button type="submit">SIGNUP</button></form>
                <form action="logout.php" method="POST"><button type="submit">LOGOUT</button></form>
            </li>
         </ul>
     </nav>
         
     </header>
     
     <div class="maincontent">
            <article class="topcontent">
                <header>
                    <h2><a href="#" title="first post">Ingredients</a></h2>
                </header>
                    <p>
                        100g plain flour<br>
                        2 egg<br>
                        300ml semi-skimmed milk<br>
                        1 tbsp sunflower oil or vegetable, plus extra for frying<br>
                        pinch salt
                    </p>
            </article>
         
            <article class="nextcontent">
                <header>
                    <h2><a href="#" title="second post">Method</a></h2>
                </header>
                    <p>
                        <strong>Blending in the flour:</strong> Put the flour and a pinch of salt into a large mixing bowl and make a well in the centre. Crack the eggs into the middle, then pour in about 50ml milk and 1 tbsp oil. Start whisking from the centre, gradually drawing the flour into the eggs, milk and oil. Once all the flour is incorporated, beat until you have a smooth, thick paste. Add a little more milk if it is too stiff to beat.<br>
                        
                        <br><strong>Finishing the batter:</strong> Add a good splash of milk and whisk to loosen the thick batter. While still whisking, pour in a steady stream of the remaining milk. Continue pouring and whisking until you have a batter that is the consistency of slightly thick single cream. Traditionally, people would say to now leave the batter for 30 mins, to allow the starch in the flour to swell, but there’s no need.<br>
                        
                        <br><strong>Getting the right thickness:</strong> Heat the pan over a moderate heat, then wipe it with oiled kitchen paper. Ladle some batter into the pan, tilting the pan to move the mixture around for a thin and even layer. Quickly pour any excess batter into a jug, return the pan to the heat, then leave to cook, undisturbed, for about 30 secs. Pour the excess batter from the jug back into the mixing bowl. If the pan is the right temperature, the pancake should turn golden underneath after about 30 secs and will be ready to turn.<br>
                        
                        <br><strong>Flipping pancakes:</strong> Hold the pan handle, ease a fish slice under the pancake, then quickly lift and flip it over. Make sure the pancake is lying flat against base of the pan with no folds, then cook for another 30 secs before turning out onto a warm plate. Continue with the rest of the batter, serving them as you cook or stack onto a plate. You can freeze the pancakes for 1 month, wrapped in cling film or make them up to a day ahead.
                    </p>
            </article>
         
            <article class="thirdcontent">
                <header>
                    <h2><a href="#" title="third post">User comments:</a></h2>
                </header>
                    <?php
                    if (isset($_SESSION['id'])){
                        echo "<form method='POST' action='".setComments($conn)."'>
                            <input type='hidden' name='uid' value='".$_SESSION['id']."'>
                            <input type='hidden' name='dates' value='".date('Y-m-d H:i:s')."'>
                            <textarea name='message'></textarea>
                            <button type='submit' name='commentSubmit'>Comment</button>
                        </form>";
                    } else {
                        echo "Login to comment!";
                    }
                        
                    getComments($conn);
                    ?>
            </article>
     </div>
     
 </body>
</html> 