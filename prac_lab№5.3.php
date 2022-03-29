<!DOCTYPE html>
<html lang="ru">
<head>
    <title>HTML-форма с флажками</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
$file = file('list.txt');
?>
<form method='post'>
    <?php
    if(!empty($_POST))
    {
        file_put_contents('list.txt', '');
        foreach($file as $key => $value) {
            if(!isset($_POST['item'.$key])) {
                $mol = [$key => $value];
                foreach($mol as $v) {
                    file_put_contents('list.txt', $v, FILE_APPEND);
                }
            }
        }
        $file = file('list.txt'); // Прочитать измененный файл
        foreach($file as $key => $value) {
            echo "<input type='checkbox' name='item".$key."' value={$key}>{$value}<br/>";
        }
    } else {
        foreach($file as $key => $value) {
            echo "<input type='checkbox' name='item".$key."' value={$key}>{$value}<br/>";
        }
    }
    ?>
    <input type='submit' value='Отправить'/>
</form>
</body>
</html>