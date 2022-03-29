<!DOCTYPE html>
<html lang="ru">
<head>
    <title>HTML-форма с флажками</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
date_default_timezone_set('Asia/Bangkok');
if ($_POST) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $nameSurname = $name . '-' . $surname;
    echo '<p>Время:' . date('l jS \of F Y H:i:s A') . '</p>';
    echo '<p>Время:' . date('H') . '</p>';

    if (5 <= date('H') and date('H') < 11) {
        echo '<p>Доброе утро, ' . $nameSurname . '</p>';
        echo '<p>Сведения о вас:' . $_SERVER['HTTP_USER_AGENT'] . '</p>';
    }

    if (11 <= date('H') and date('H') < 16) {
        echo '<p>Добрый день, ' . $nameSurname . '</p>';
        echo '<p>Сведения о вас:' . $_SERVER['HTTP_USER_AGENT'] . '</p>';
    }

    if (16 <= date('H') and date('H') < 24) {
        echo '<p>Добрый вечер, ' . $nameSurname . '</p>';
        echo '<p>Сведения о вас:' . $_SERVER['HTTP_USER_AGENT'] . '</p>';
    }

    if (0 <= date('H') and date('H') < 5) {
        echo '<p>Доброй ночи, ' . $nameSurname . '</p>';
        echo '<p>Сведения о вас:' . $_SERVER['HTTP_USER_AGENT'] . '</p>';
    }
}
?>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo "<h1>Вы не можете пользоваться сайтом с этого браузера!</h1>";
} else {
    echo "<p>Задание №6.1</p>
    <form method='post'>
    <label for='name'>Введите имя</label><br>
    <input name='name'><br>
    <label for='surname'>Введите фамилию</label><br>
    <input name='surname'><br>
    <input type='submit' value='Отправить'>
</form>";
}
?>
</body>
</html>
