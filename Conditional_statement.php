<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Y WEB</title>
  </head>
  <body>
    <?php
      $num1 = $_GET['num1'];
      $num2 = $_GET['num2'];
      if(isset($_GET['type'])){
        $type = $_GET['type'];
      }
      else{
        $type = "plus";
      }
      if($type == "plus"){
        echo $num1 + $num2;
      }
      elseif ($type == "minus") {
        echo $num1 - $num2;
      }
      else{
        echo "Not Found";
      }
    ?>
  </body>
</html>
