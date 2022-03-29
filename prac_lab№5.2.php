<!DOCTYPE html>
<html lang="ru">
<head>
    <title>HTML-форма с флажками</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
if ($_POST) {
    $file=fopen('content.txt','w');
    fputs($file,$_POST['fileIn']);
    fclose($file);
    $result = file_get_contents('content.txt');
    echo "<p>Данные в файле: $result</p>";
    echo "<p>Данные записаны в файл!</p>";
}
?>
<p>Задание №5.2</p>
<form method="post">
    <?php
    if (!$_POST){
        echo '<p>Запись в textarea</p>' .
            "<textarea name='fileIn' id='fileIn'></textarea><br>";
    }
    ?>
    <?php
    if ($_POST){
        echo '<p>В textarea рузультат</p>' .
        "<textarea name='fileIn' id='fileIn'>$result</textarea>";
    }
    ?>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
