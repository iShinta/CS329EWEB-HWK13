<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Reine Priebus, the party leader, is named Chief of Staff</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Austin Newspaper</h1>
    <?php include 'menu.php'; ?>
    <?php if(isset($_COOKIE["id"])){

    ?>
    <h2>Reine Priebus, the party leader, is named Chief of Staff</h2>
    <p>President-elect Donald J. Trump chose Mr. Priebus, whose friendship with the House speaker, Paul D. Ryan, could help secure early legislative victories.</p>
    <?php }else{
      echo "<p>You need to log in to read this article.</p>";
    }?>
  </div>
</body>
</html>
