<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Teslas in Trailer Parks: California’s Housing Squeeze</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Austin Newspaper</h1>
    <?php include 'menu.php'; ?>
    <?php if(isset($_COOKIE["id"])){

    ?>
    <h2>Teslas in Trailer Parks: California’s Housing Squeeze</h2>
    <p>Most Californians agree that it costs too much to live in the state. Mountain View, Google’s hometown, is trying to do something about the housing shortage that has increased prices.</p>
    <?php }else{
      echo "<p>You need to log in to read this article.</p>";
    }?>
  </div>
</body>
</html>
