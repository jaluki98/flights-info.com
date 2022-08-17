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
      <p>Click <a href="login.php">here</a> if you have already an account.</p>
      <br>
      <input type="text" name="name">
      <label for="name">Full Name</label>
      <input id="email" type="email" class="validate">
      <label for="email">Email</label>
      <input type="text" name="username">
      <label for="uid">Username</label>
      <input type="password" name="pwd">
      <label for="pwd">Password (<u>Unique</u> and <u>strong</u>. <a href="help.php">Why?</a>)</label>
      <input type="password" name="pwdrepeat">
      <label for="pwdrepeat">Repeat Password</label>
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