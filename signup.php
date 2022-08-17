<?php  
include_once 'header.php';
?>

<div class="container">
  <h4 class="header center light-blue-text">Sign Up</h4>
  <div class="section">
    <div class="row">
      <div class="col s12 m4"></div>
      <form class="col s12 m4 card" action="includes/signup.inc.php" method="post">
        <br>
        <p>Click <a href="login.php">here</a> if you already have an account.</p>
        <?php 
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo '<div class="card-panel red white-text">Please fill in all fields.</div>';
          }
          else if ($_GET["error"] == "invaliduid") {
            echo '<div class="card-panel red white-text">Username can only include letters and numbers.</div>';
          }
          else if ($_GET["error"] == "invalidemail") {
            echo '<div class="card-panel red white-text">Please check your entered Email.</div>';
          }
          else if ($_GET["error"] == "passwordsdontmatch") {
            echo '<div class="card-panel red white-text">The entered password does not match.</div>';
          }
          else if ($_GET["error"] == "stmtfailed") {
            echo '<div class="card-panel red white-text">Something went wrong.</div>';
          }
          else if ($_GET["error"] == "usernametaken") {
            echo '<div class="card-panel red white-text">The entered username or Email is already being used by a differnt account.</div>';
          }
          else if ($_GET["error"] == "none") {
            echo '<div class="card-panel green white-text">You signed up sucessfully. Please confirm your email address.</div>';
          }
        }
        ?>
        <br>
        <input type="text" name="name">
        <label for="name">Full Name</label>
        <input id="email" type="email" class="validate" name="email">
        <label for="email">Email</label>
        <input type="text" name="uid">
        <label for="uid">Username</label>
        <input type="password" name="pwd">
        <label for="pwd">Password (<u>Unique</u> and <u>strong</u>. <a href="help.php">Why?</a>)</label>
        <input type="password" name="pwdRepeat">
        <label for="pwdRepeat">Repeat Password</label>
        <br><br>
        <label> <input type="checkbox" id="terms" name="terms"><span>Check here to indicate that you have read and agree to our <a href="termsandconditions.php"> terms and conditions</a>.</span></label>
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