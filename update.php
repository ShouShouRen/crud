<?php
require_once("pdo.php");
extract($_POST);
$interest = implode(",", $interest);
$sql = "UPDATE students SET name='$name',phone='$phone',mail='$mail',edu='$edu',gender='$gender',interest='$interest',content = '$content' WHERE id = {$id}";
$stmt = $pdo->prepare($sql);
$stmt->execute();
header("Location: index.php");