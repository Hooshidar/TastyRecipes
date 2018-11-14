<?php
    require"Header.php";
?>

<div class="signupcontent">
    <h1>Signup</h1>
	<?php
		if (isset($_GET['error'])){
			if ($_GET['error'] == "emptyfields"){
				echo '<p style="color:red;">Make sure you fill all fields</p>';
			}
			else if ($_GET['error'] == "invalidmailuid"){
				echo '<p style="color:red;">Invalid username and e-mail</p>';
			}
			else if ($_GET['error'] == "invalidmail"){
				echo '<p style="color:red;">Invalid e-mail</p>';
			}
			else if ($_GET['error'] == "invaliduid"){
				echo '<p style="color:red;">Invalid username</p>';
			}
			else if ($_GET['error'] == "passwordcheck"){
				echo '<p style="color:red;">Password doesnt match</p>';
			}
			else if ($_GET['error'] == "usertaken"){
				echo '<p style="color:red;">Username is taken</p>';
			}
		}
		else if(isset($_GET['signup'])){
			if ($_GET['signup'] == "success"){
				echo '<p style="color:green;">Signup successful</p>';
			}
		}
		else {
			echo '<p>Fill out the form below.</p>';
		}
	?>
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