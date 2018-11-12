<?php
    session_start();
?>
<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="calendar.css">
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
             <li class="active"><a href="Calender.php">Calendar</a></li>
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
                    <h2><a href="#" title="first post">Food Calendar</a></h2>
                </header>
                    <div id="calendar">
                        <ul class="weekdays">
                            <li>Monday</li>
                            <li>Tuesday</li>
                            <li>Wednesday</li>
                            <li>Thursday</li>
                            <li>Friday</li>
                            <li>Saturday</li>
                            <li>Sunday</li>
                        </ul>
                        <ul class="days">
                            <li class="dayOM">
                                <div class="date">29</div>
                            </li>
                            <li class="dayOM">
                                <div class="date">30</div>
                            </li>
                            <li class="dayOM">
                                <div class="date">31</div>
                            </li>
                            <li class="day">
                                <div class="date">1</div>
                            </li>
                            <li class="day">
                                <div class="date">2</div>
                            </li>
                            <li class="day">
                                <div class="date">3</div>
                            </li>
                            <li class="day">
                                <div class="date">4</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">5</div>
                            </li>
                            <li class="day">
                                <div class="date">6</div>
                            </li>
                            <li class="day">
                                <div class="date">7</div>
                            </li>
                            <li class="day">
                                <div class="date">8</div>
                                <a href="Pancakes.php"><img src="img/pancake.gif" alt="Pancakes"></a>
                            </li>
                            <li class="day">
                                <div class="date">9</div>
                            </li>
                            <li class="day">
                                <div class="date">10</div>
                            </li>
                            <li class="day">
                                <div class="date">11</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">12</div>
                            </li>
                            <li class="day">
                                <div class="date">13</div>
                            </li>
                            <li class="day">
                                <div class="date">14</div>
                            </li>
                            <li class="day">
                                <div class="date">15</div>
                            </li>
                            <li class="day">
                                <div class="date">16</div>
                            </li>
                            <li class="day">
                                <div class="date">17</div>
                            </li>
                            <li class="day">
                                <div class="date">18</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">19</div>
                            </li>
                            <li class="day">
                                <div class="date">20</div>
                                <a href="Meatballs.php"><img src="img/meatballs.gif" alt="Meatballs"></a>
                            </li>
                            <li class="day">
                                <div class="date">21</div>
                            </li>
                            <li class="day">
                                <div class="date">22</div>
                            </li>
                            <li class="day">
                                <div class="date">23</div>
                            </li>
                            <li class="day">
                                <div class="date">24</div>
                            </li>
                            <li class="day">
                                <div class="date">25</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">26</div>
                            </li>
                            <li class="day">
                                <div class="date">27</div>
                            </li>
                            <li class="day">
                                <div class="date">28</div>
                            </li>
                            <li class="day">
                                <div class="date">29</div>
                            </li>
                            <li class="day">
                                <div class="date">30</div>
                            </li>
                            <li class="dayOM">
                                <div class="date">1</div>
                            </li>
                            <li class="dayOM">
                                <div class="date">2</div>
                            </li>
                        </ul>
                    </div>
            </article> 
     </div>
     
 </body>
</html> 