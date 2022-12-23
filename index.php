<?php
require_once("pdo.php");
$sql = "SELECT * FROM students";
$stmt = $pdo->prepare($sql);
$result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        table,th,td{
            border-collapse: collapse;
            border: 2px solid #eee;
        }
        td,th{
            padding: 16px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="create.php">建立資料</a>
    </nav>
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>電話</th>
            <th>Mail</th>
            <th>性別</th>
            <th>學歷</th>
            <th>備註</th>
            <th>動作</th>
        </tr>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["mail"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["edu"]; ?></td>
                <td><?php echo $row["content"]; ?></td>
                <td><a href="delete.php?id=<?php echo $row["id"]?>" onclick="return confirm('確定要刪除?')">刪除</a></td>
                <td><a href="edit.php?id=<?php echo $row["id"]?>">修改</a></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>