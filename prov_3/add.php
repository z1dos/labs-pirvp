<?php

$title = $_POST['title'];

require 'db.php';

$error = 'Email введен неправильно';

if (preg_match_all("/^([А-ЯЁ]{1}[а-яё]*)$/u", $title)){
    $sql = 'INSERT INTO list(title) VALUES(:title)';
    $query = $pdo->prepare($sql);
    $query->execute(['title' => $title]);
} else echo $error;
header('Location: index.php');