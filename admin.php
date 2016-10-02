<!DOCTYPE html>
<html>
<head>
	<title>Тестовая камера</title>
</head>
<body>
<p><a href="list.php">Посмотреть список доступных тестов</a></p>
<?php
/*$f = fopen('1.json', 'r');// открываем и читаем 
$data = stream_get_contents($f);//получаем содержимое
var_dump($data);
echo "<br />";
$f = fopen('2.json', 'r');// открываем и читаем 
$data = stream_get_contents($f);//получаем содержимое
var_dump($data);
echo "<br />";
$f = fopen('3.json', 'r');// открываем и читаем 
$data = stream_get_contents($f);//получаем содержимое
var_dump($data);
echo "<br />";
$f = fopen('4.json', 'r');// открываем и читаем 
$data = stream_get_contents($f);//получаем содержимое
var_dump($data);
echo "<br />";
$f = fopen('5.json', 'r');// открываем и читаем 
$data = stream_get_contents($f);//получаем содержимое
var_dump($data);*/

$uploaddir = 'test/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
?>

<form enctype="multipart/form-data" action="" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="30000">
Отправить: <input name="userfile" type="file">
<input type="submit" value="Загрузить">
</form>
</body>
</html>