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
<form method="post">
    <input name="firstCoor" checked>Введите первую координату<br>
    <input name="secondCoor" checked>Введите вторую координату<br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>