<?php

require 'db.php';

$title = $_GET['title'];

$sql = "SELECT * FROM `list` WHERE `title` = ?";
$query = $pdo->prepare($sql);
$query->execute([$title]);
