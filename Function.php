<html>
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
	<body>
    <?php
    function basic($message,$type,$num1, $num2){
      if($type=="+"){
        echo "$message:";
        echo $num1+$num2."<br/>";
      }
      if($type=="-"){
        echo "$message:";
        echo $num1-$num2."<br/>";
      }
      if($type=="*")
        echo "$message:".$num1*$num2."<br/>";
      if($type=="/")
        echo "$message:".$num1/$num2."<br/>";
      if($type=="%")
        echo "$message:".$num1%$num2."<br/>";
      }
      basic("두 수를 더한 값은?","+",$_GET['num1'],$_GET['num2']);
      basic("두 수를 뺸 값은?","-",$_GET['num1'],$_GET['num2']);
      basic("두 수를 곱한 값은?","*",$_GET['num1'],$_GET['num2']);
      basic("두 수를 나눈 값은?","/",$_GET['num1'],$_GET['num2']);
      basic("두 수를 나누고 남은 값은?","%",$_GET['num1'],$_GET['num2']);
      ?>
		</body>
</html>
