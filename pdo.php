<?php
$db_host = "localhost";
$db_user = "peter";
$db_pw = "12345678";
$db_name = "crud";
$db_charset = "utf8mb4";

$dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
try {
    $pdo = new PDO($dsn, $db_user, $db_pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
