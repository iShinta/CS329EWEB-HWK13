<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Trump on Abortion and Immigration, and back on Twitter</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Austin Newspaper</h1>
    <?php include 'menu.php'; ?>
    <?php if(isset($_COOKIE["id"])){

    ?>
    <h2>Trump on Abortion and Immigration, and back on Twitter</h2>
    <p>On “60 Minutes,” Mr. Trump said he would prioritize deporting up to three million illegal immigrants and pick a Supreme Court justice who opposes abortion rights. </p>
    <?php }else{
      echo "<p>You need to log in to read this article.</p>";
    }?>
  </div>
</body>
</html>
