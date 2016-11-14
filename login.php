<?php
function start(){
  //Login is included at the start of each page to see if they are logged in.
  echo "helloe";
  }

  function showLogin(){ ?>
    <p>Please Log In</p>
    <form method="post" action="#">
      <input type="text" name="username" />
      <input type="text" name="password" /><br />
      <input type="submit" name="submit" value="Submit" />
      <input type="reset" name="reset" value="Reset" />
    </form>
    <p>You don't have a login? Register here: <a href="register.php">Register</a></p>
  <?php }

  function showLogged(){ //TODO: Show article
    echo "Cookie id: ".$_COOKIE["id"];
    echo "<br /> Time logged in: ".$_COOKIE["timeloggedin"]; ?>
    <form method="post" action="#">
      <input type="submit" name="logout" value="Log Out" />
    </form>
    <?php
    //Form has been submitted, check if login ok
  }

  function showLoggedOut(){
    unset($_COOKIE["id"]);
    unset($_COOKIE["timeloggedin"]);
    setcookie("id", '', time() - 3600);
    setcookie("timeloggedin", '', time() - 3600);
    echo "<p>Thank You. You are now logged out</p>";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
  </head>

  <body>
    <?php start(); ?>
  </body>
</html>
