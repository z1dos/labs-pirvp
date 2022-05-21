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
<h2>Задачи по запросу</h2>
<h3>Невыполненные</h3>
<ul>
    <?php

    require 'db.php';

    $title = $_GET['title'];

    $sql = "SELECT * FROM `list` WHERE `title` = ?";
    $query = $pdo->prepare($sql);
    $query = $pdo->query("SELECT * FROM `list` WHERE `title` = '$title' AND `done` = 'no' ");

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<div><li>' . $row->title . ' <a href="delete.php?id=' . $row->id . '">X</a></li>' . '<a href="done.php?id=' . $row->id . '">Выполенено</a>' . ' </div>';
    }
    ?>
</ul>
<h3>Выполенные</h3>
<ul>
    <?php
    require 'db.php';

    $title = $_GET['title'];

    $sql = "SELECT * FROM `list` WHERE `title` = ?";
    $query = $pdo->prepare($sql);
    $query = $pdo->query("SELECT * FROM `list` WHERE `title` = '$title' AND `done` = 'done' ");

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<div><li>' . $row->title . ' <a href="delete.php?id=' . $row->id . '">X</a></li>' . ' </div>';
    }
    ?>
</ul>
<h2><a href="index.php">Вернуться к добавлению</a> </h2>
</body>
</html>