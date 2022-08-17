<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Flights-Info.com</title>

  <script src="https://kit.fontawesome.com/ec3291d551.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue accent-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://flights-info.com" class="brand-logo"><i class="large material-icons">flight_takeoff</i></a>
      <ul class="right hide-on-med-and-down">
        <?php
          if (isset($_SESSION["useruid"])) {
            echo '<li><a href="flightinfo.php">Flight Information</a></li> <li><a href="includes/logout.inc.php">Log out</a></li>';
          }
          else {
          echo '<li><a href="login.php"><i class="large material-icons">person</i></a></li>';
        }
        ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <?php
          if (isset($_SESSION["useruid"])) {
          echo '<li><a href="flightinfo.php">Display Flight Information</a></li> <li><a href="includes/logout.inc.php">Log out</a></li>';
        }
          else {
          echo '<li><a href="login.php">Log in</a></li>';
        }
        ?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    