<?php
require_once("pdo.php");
extract($_GET);
$sql = "DELETE FROM students WHERE id = {$id}";
$stmt = $pdo->prepare($sql);
$stmt->execute();
header("Location:index.php");
