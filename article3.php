<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Syrian Rebels Brace for a Trump Cutoff, but See Some Upside</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Austin Newspaper</h1>
    <?php include 'menu.php'; ?>
    <?php if(isset($_COOKIE["id"])){

    ?>
    <h2>Syrian Rebels Brace for a Trump Cutoff, but See Some Upside</h2>
    <p>President-elect Donald J. Trump has suggested he will end support, which some groups hope would encourage Saudi Arabia and Turkey to provide more sophisticated weapons.</p>
    <?php }else{
      echo "<p>You need to log in to read this article.</p>";
    }?>
  </div>
</body>
</html>
