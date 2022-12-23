<?php

require_once("pdo.php");
extract($_POST);

$interest = implode(',', $interest);

$sql = "INSERT INTO students(name,mail,phone,gender,edu,interest,content) VALUES('$name','$mail','$phone','$gender','$edu','$interest','$content')";
$stmt = $pdo->prepare($sql);
$stmt->execute();
header("Location: index.php");
