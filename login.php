<?php
function start(){
  //Login is included at the start of each page to see if they are logged in.
  if($_SERVER['REQUEST_METHOD'] === 'POST'){ //Form has been posted
    echo "Hello";
    }
  }else{ //Not after a POST
    echo "Wesh";
  }

  function showLogin(){ ?>
    <p>Please Log In</p>

  <?php }

  function showLogged(){ //TODO: Show article
    echo "Proup";
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
