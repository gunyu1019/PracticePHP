<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Y WEB</title>
  </head>
  <body>
    <?php
      $num = array($_GET['num1'],$_GET['num2']);
      echo var_dump( $num[0] + $num[1] );
    ?>
  </body>
</html>
