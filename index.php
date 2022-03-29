<!DOCTYPE html>
<html lang="ru">
<head>
    <title>HTML-форма с флажками</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
if ($_POST) {

    $firstCoor = $_POST['firstCoor'];
    $secondCoor = $_POST['secondCoor'];
    $result = $firstCoor - $secondCoor;

    echo '<p>Первая координата:' . $firstCoor . '</p>' . '<p>Вторая координата:' . $secondCoor . '</p>' . '<p>Результат:' . $result . '</p>';

}
?>
<p>Задание №5.1</p>
<form method="post">
    <input name="firstCoor" checked>Введите первую координату<br>
    <input name="secondCoor" checked>Введите вторую координату<br>
    <input type="submit" value="Отправить">
</form>
<a href="prac_lab№5.2.php">Задание 5.2</a><br>
<a href="prac_lab№5.3.php">Задание 5.3</a><br>
<a href="prac_6/prac_lab_6_1.php">Задание 6.1</a><br>
<a href="prac_6/prac_lab_6_2.php">Задание 6.2</a><br>
</body>
</html>
