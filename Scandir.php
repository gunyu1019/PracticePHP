<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Y WEB</title>
  </head>
  <body>
    <?php
      $num = scandir('./data');
      echo "파일갯수: ".count( $num )."개<br/>파일: ";
      echo var_dump($num);
    ?>
  </body>
</html>
