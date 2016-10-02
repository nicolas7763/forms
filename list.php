<!DOCTYPE html>
<html>
<head>
	<title>Список загруженных файлов</title>
</head>
<body>
<h1>Доступные тесты</h1>
<p><a href="admin.php">Вернуться на главную</a></p>
<?php
$directory = 'test/';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>
<?php foreach ($scanned_directory as $key => $value) {
 echo "<p>$value</p>";
 
}
?>
<h2>Введите название доступного теста</h2>
<form action="test.php" method="post">
	<input type="text" name="testnumber"/>
	<input type="submit" name="send" value="Ввод" />
</form>
</body>
</html>