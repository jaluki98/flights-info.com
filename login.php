<?php  
include_once 'header.php';
?>

<div class="container">
	<h4 class="header center light-blue-text">Log In</h4>
	<div class="section">
		<div class="row">
			<div class="col s12 m4"></div>
			<form class="col s12 m4 card" action="includes/login.inc.php" method="post">
				<br>
				<p>Click <a href="signup.php">here</a> if you want to sign up.</p>
				<?php 
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo '<div class="card-panel red white-text">Please fill in all fields.</div>';
					}
					else if ($_GET["error"] == "wronglogin") {
						echo '<div class="card-panel red white-text">Incorrect log in details.</div>';
					}
				}
				?>
				<br>
				<input type="text" name="uid">
				<label for="name">Email or Username</label>
				<input type="password" name="pwd">
				<label for="pwd">Password</label>
				<br><br>
				<label> <input type="checkbox" id="terms" name="terms"><span>Keep me signed in</a>.</span></label>
				<br>
				<br>
				<button class="btn-large waves-effect waves-light deep-orange darken-1" type="submit" name="submit">Submit<i class="material-icons right">send</i></button>
				<p></p>
			</form>
		</div>
	</div>
	<br>

</div>


<div class="container">

</div>

<?php  
include_once 'footer.php';
?>