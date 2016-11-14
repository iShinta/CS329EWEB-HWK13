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
      $fh2 = fopen("passwd.txt", "a");
      if(!array_key_exists($username, $userlist)){
        echo "Write";
        fwrite($fh2, "Wesh");
        print($username);
        print($password);
      }
      fclose($fh2);
      echo "end registration";
    }
  }else{
    if(isset($_COOKIE["id"])){ //In a session
      //Recuperer les variables de la session
      echo "You are already registered.";
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
