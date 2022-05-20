<?php

require 'db.php';

$id = $_GET['id'];

$sql = "UPDATE `list` SET `done` = 'done' where `id` = ?";
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: index.php');