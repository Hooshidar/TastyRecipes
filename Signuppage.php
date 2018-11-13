<?php
    require"Header.php";
?>

<div class="signupcontent">
    <h1>
    Signup
    </h1>
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username...">
        <input type="text" name="mail" placeholder="E-mail...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwd-repeat" placeholder="Reapeat password...">
        <button type="submit" name="signup-submit">Submit</button>
    </form>
</div>
<?php
    require"Footer.php";
?>