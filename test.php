

<!DOCTYPE html>
<html>
<head>
	<title>Тест</title>
</head>
<body>
<p><a href="list.php">вернуться к списку тестов</a></p>
	
<?php
error_reporting(E_ALL);
$testnumb = htmlspecialchars($_POST['testnumber']);//получаем значение номер теста 
$filename ='test/'.$testnumb;//прописываем путь к тесту в зависимости от введенного числа
$f = fopen($filename, 'r');// открываем и читаем
if ($f==false) {
 	echo "Такого теста не существует. Пожалуйста выберите тест из имеющихся на сервере!!!";
 	die;
 } 
$data = stream_get_contents($f);//получаем содержимое
$array = json_decode($data, true);

foreach ($array as $key => $value) {
	foreach ($value as $value1) {
		//var_dump($value);
		//echo "$value $value1";
		$question = "{$value["question"]}";//получаем только вопросы
		$goodAnswer= "{$value["answer1"]}";
		$badAnswer1 ="{$value["answer2"]}";
		$badAnswer2 ="{$value["answer3"]}";
		//var_dump($goodAnswer);
		
	}//$question = "{$value["question"]}";
	//$goodAnswer= "{$value["answer1"]}"; 
		//$badAnswer1 ="{$value["answer2"]}";
		//$badAnswer2 ="{$value["answer3"]}";
	
};
?>
<form action="function.php" method= "post">
<div>
<p><b><?=$question?></b></p> 
<label><input name="q1" type="radio" value="a"><p><b><?=$goodAnswer?></b></p></label>
<label><input name="q1" type="radio" value="b"><p><b><?=$badAnswer1?></b></p></label>
<label><input name="q1" type="radio" value="c"><p><b><?=$badAnswer2?></b></p></label>
</div>

<button type="submit">Результат</button>
</form>

</body>
</html>