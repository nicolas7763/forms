<?php
error_reporting(E_ALL);
$ot = 0;
   $not = 0;
      if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}
      
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Правильных ответов: <?php echo $ot; ?></p>
<p>Неправильных ответов: <?php echo $not; ?></p>
</body>
</html>