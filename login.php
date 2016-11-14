<?php
  function start(){
    //Login is included at the start of each page to see if they are logged in.
    if($_SERVER['REQUEST_METHOD'] === 'POST'){ //Form has been posted
      if(isset($_POST["username"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        //TODO: Check file to see if user is authorized
        $fh = fopen("passwd.txt", "r");
        //Check if username is already taken
        $userlist = Array();
        while(!feof($fh)){
          //Read Line
          $line = fgets($fh);
          $line_pieces = explode(":", $line);
          $userlist[$line_pieces[0]] = $line_pieces[1];
        }
        fclose($fh);

        echo 'Password pour ce username: ';
        print($userlist[$username]."<br />");
        if(array_key_exists($username, $userlist) && strcmp($userlist[$username], $password)){
          echo "Login Succeeded. Welcome ".$username. ".<br />";
          setcookie("id", $username, time()+120);
          setcookie("timeloggedin", time(), time()+120);
          showLogged();
        }else{
          echo "Login Failed.<br />Bad username or password";
          echo "<br />You entered username: ".$username;
          echo "<br />and Password: ".$password;
          echo "<br /><a href=\"http://zweb.cs.utexas.edu/users/cs329e-fa16/minhtri/hwk13/index.php\"> Back to the form </a>";
        }
      }else if(isset($_POST["logout"])){
        // echo "logout";
        showLoggedOut();
      }
    }else{ //Not after a POST
      if(isset($_COOKIE["id"])){ //Logged in
        //Show article
        showLogged();
      }else{ //Is not in a `session`
        // echo "Not in a session, Showing Login";
        showLogin();
      }
    }
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
    echo "Hi ".$_COOKIE["id"];
    //echo "<br /> Time logged in: ".$_COOKIE["timeloggedin"]; ?>
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

  start();
?>
