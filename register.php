<?php
function start(){
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //echo "Not in a session, Form Posted";
    if(isset($_POST["username"])){
      $username = $_POST["username"];
      $password = $_POST["password"];

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
      //print_r($userlist);

      //If not taken, register
      if(!array_key_exists($username, $userlist)){
        $fh2 = fopen("passwd.txt", "a");
        fwrite($fh2, $username.":".$password."\n");
        fclose($fh2);
        setcookie("id", $username, time()+120);
        setcookie("timeloggedin", time(), time()+120);
        print($username." has been successfully registered");
        print("<br /><a href=\"index.php\"> Back to the homepage </a>");
      }else{
        print($username." already exists.");
        print("<br /><a href=\"index.php\"> Back to the homepage </a>");
      }

    }
  }else{
    if(isset($_COOKIE["id"])){ //In a session
      //Recuperer les variables de la session
      print("You are already registered.");
      print("<br /><a href=\"index.php\"> Back to the homepage </a>");
    }else{ //Is not in a session
      // echo "Not in a session, Showing Login";
      showRegister();
    }
  }
}

function showRegister(){ ?>
  <p>Registration Page</p>
  <form method="post" action="#">
    Username: <input type="text" name="username" /><br />
    Password: <input type="text" name="password" /><br />
    <input type="submit" name="submit" value="Submit" />
    <input type="reset" name="reset" value="Reset" />
  </form>
<?php }
?>

<!DOCTYPE html>
<html>
  <head>
  </head>

  <body>
    <?php start(); ?>
  </body>
</html>
