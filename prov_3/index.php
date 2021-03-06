<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>todo list</title>
</head>
<body>
<h2>Поиск задачи</h2>
<form action="find.php" method="GET">
    <input type="text" name="title">
    <input type="submit" value="Найти">
</form>
<h2>Добавить задачу</h2>
<form action="add.php" method="POST">
    <input type="text" name="title" required>
    <input type="submit" value="Добавить">
</form>
<h2>Ваши задачи</h2>
<ul>
    <?php

    require 'db.php';

    $query = $pdo->query("SELECT * FROM `list` where `done` = 'no' ORDER BY `id` DESC");

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<div><li>' . $row->title . ' <a href="delete.php?id=' . $row->id . '">X</a></li>' . '<a href="done.php?id=' . $row->id . '">Выполенено</a>' . ' </div>';
    }
    ?>
</ul>
<h2>Выполенные задачи</h2>
<ul>
    <?php
    require 'db.php';

    $query = $pdo->query("SELECT * FROM `list` where `done` = 'done' ORDER BY `id` DESC");

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<div><li>' . $row->title . ' <a href="delete.php?id=' . $row->id . '">X</a></li>' . ' </div>';
    }
    ?>
</ul>
</body>
</html>