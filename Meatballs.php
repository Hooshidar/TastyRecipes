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
                        <strong>Meatballs</strong><br>
                        300g good-quality pork sausage (about 4 large or 8 chipolatas)<br>
                        1 small onion<br>
                        1 carrot<br>
                        1 tbsp dried oregano<br>
                        500g lean beef mince<br>
                        50g Parmesan, finely grated, plus extra to serve<br>
                        75g dried breadcrumb<br>
                        1 medium egg<br>
                        1 tbsp olive oil<br>
                    
                        <br><strong>Tomato Sauce</strong><br>
                        1 carrot (finely grated)<br>
                        2 sticks of celery (grated)<br>
                        1 courgette (coarsely grated)<br>
                        3 garlic clove (finely grated)<br>
                        2 red pepper<br>
                        1 tbsp olive oil<br>
                        1 tbsp tomato purée<br>
                        pinch golden caster sugar<br>
                        splash red wine vinegar<br>
                        3 x 400g tins chopped tomatoes<br>
                        cooked spaghetti, to serve<br>
                        handful basil leaves, snipped
                    </p>
            </article>
     
            <article class="nextcontent">
                <header>
                    <h2><a href="#" title="second post">Method</a></h2>
                </header>
                    <p>
                        <strong>Squeeze some sausages.</strong> Get your child to squeeze all the sausagemeat out of the skins into a large bowl. They can hold the sausages or do it by squashing them on a board.<br>
                        
                        <br><strong>Get grating.</strong> Get your child to coarsely grate the onion and finely grate the carrot. If the onion starts to hurt their eyes, get them to wear goggles, which is good fun. Grating can take a bit of strength, so you may need to help. Tip these vegetables in with the sausages. While you have the grater out, grate the Parmesan, other vegetables and garlic for the sauce, and set aside.<br>
                        
                        <br><strong>Make a marvellous mix.</strong> Next, get your child to add all the other meatball ingredients one by one, except the olive oil, into the bowl and season with black pepper.<br>
                        
                        <br><strong>Squish everything together.</strong> Get the child to squish everything together through their hands until completely mixed. Keep an eye on younger children to make sure that they don’t taste any of the raw mix.<br>
                        
                        <br><strong>Roll meatballs.</strong> Children as young as three can now roll the meatball mix into walnut-sized balls, then place them on a board or tray. This mix should make 40 balls – counting these is great way to help teach older children basic division. Cover the meatballs with cling film and have a little tidy up.<br>
                        
                        <br><strong>Prepare the red peppers.</strong> Firstly, peel the peppers with a vegetable peeler, cut off the tops and bottoms and remove the seeds. Cut the peppers in half and children from the age of four can cut the peppers into strips.<br>
                        
                        <br><strong>Make the sauce.</strong> A grown-up will need to help here. Heat the oil in a large saucepan. Add the vegetables and garlic and cook for 5 mins. Stir in the tomato purée, sugar and vinegar, leave for 1 min then tip in the tomatoes and simmer for 5 mins. Get the child to help blitz the sauce with a hand blender. Gently simmer the sauce while you cook the meatballs.<br>
                        
                        <br><strong>Cook the meatballs.</strong> Brown the meatballs in the olive oil on all sides then pop them into the sauce, working in batches if necessary. Simmer the meatballs in the sauce for 15 mins, gently stirring until they are cooked through. It’s ready to eat now or cool and freeze in suitable batches for up to 6 months. Serve with spaghetti, some basil and extra Parmesan, if you like.
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