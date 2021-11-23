<?php
include_once "connect-database.php";

$sql = "select*from account";

if (isset($conn)) {
    $result = $conn->query($sql);
}

$accounts = $result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th>name</th>
        <th>address</th>
        <th>phone</th>
        <th><a href="http://localhost/web_php/thuc-hanh2/add.php">thêm</a></th>
    </tr>
    <?php if (isset($accounts)) { ?>
        <?php foreach ($accounts as $key => $item) { ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item["email"] ?></td>
                <td><?php echo $item["password"] ?></td>
                <td><?php echo $item["name"] ?></td>
                <td><?php echo $item["address"] ?></td>
                <td><?php echo $item["phone"] ?></td>
                <td>
                    <a href="http://localhost/web_php/thuc-hanh2/update.php?id=<?php echo $item["id"] ?>">sửa</a>
                    <a href="http://localhost/web_php/thuc-hanh2/delete.php?id=<?php echo $item["id"] ?>">xóa</a>
                </td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>
</body>
</html>

