<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Y WEB</title>
  </head>
  <body>
    <?php
      if(isset($_GET['id'])){
        echo "<h1>".$_GET['id']."</h1>";
      }
      else{
        echo "<h1>Hello World</h1>";
      }
    ?>
  </body>
</html>
