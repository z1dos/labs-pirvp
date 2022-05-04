<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method='post'>
    <input name="name">
    <input name="surname">
    <input name="email">
    <button>Отправить</button>
</form>
<?php
$name = $_POST['name'];
if (empty($name)) {
    echo 'Поле Имя обязательно для заполения' . '<br>';
}
$surname = $_POST['surname'];
if (empty($surname)) {
    echo 'Поле Фамилия обязательно для заполения' . '<br>';
}
$email = $_POST['email'];
if (empty($email)) {
    echo 'Поле email обязательно для заполения' . '<br>';
}

if (preg_match_all("/^([А-ЯЁ]{1}[а-яё]*)$/u", $name)) {
    if (preg_match_all("/^([А-ЯЁ]{1}[а-яё]*)$/u", $surname)) {
        $filename = 'users.txt';

        $getContent = file_get_contents($filename);
        $getContent .= 'Имя:' . $name . ' ' . 'Фамилия:' . $surname . ' ' . 'Электронная почта:' . $email . "\n";
        file_put_contents($filename, $getContent);


        $result = "$name||$surname||$email";
        $match = null;
        $fp = fopen("users.txt", "r+");
        while (($line = stream_get_line($fp, 1024 * 1024, "\n")) !== false) {
            if(trim($line) === trim($result)) {
                $match = trim($line);
                break;
            }
        }
        fclose($fp);
        if(!empty($match)) {
            echo "Найдено совпадение - {$match}";
        } else {
            echo 'Вы зарегестрированы' . '<br>' .
                'Ваше имя: ' . $name . '<br>' .
                'Ваша фамилия: ' . $surname . '<br>' .
                'Ваша почта: ' . $email . '<br>';
        }
    } else echo 'Фамилия должна начинаться с большой буквы и должно соделрать от 2 до 20 символов';
} else echo 'Имя должно начинаться с большой буквы и должно соделрать от 2 до 20 символов';

?>
</body>
</html>