<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Y WEB</title>
  </head>
  <body>
    <?php
      $num = scandir('./data');
      echo "파일갯수: ".count( $num )."개<br/>파일명: ";
      for($i = 2; $i < count($num); $i++){
        echo "<li><a href=\"File_Get_Contents.php?id=$num[$i]\">$num[$i]</a></li>";
      }
    ?>
    <h2>
      <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
      } else {
        echo "Welcome";
      }
      ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, World";
    }
     ?>
  </body>
</html>
