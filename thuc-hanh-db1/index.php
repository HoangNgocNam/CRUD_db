<?php
include_once "connect-database1.php";

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
        <th>Phone</th>
        <th><a href="http://localhost/web_php/thuc-hanh-db1/add.php">Thêm</a></th>
    </tr>
    <?php foreach ($accounts as $key => $account) { ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $account["name"] ?></td>
            <td><?php echo $account["email"] ?></td>
            <td><?php echo $account["password"] ?></td>
            <td><?php echo $account["address"] ?></td>
            <td><?php echo $account["phone"] ?></td>
            <td>
                <a href="http://localhost/web_php/thuc-hanh-db1/update.php?id=<?php echo $account["id"]?>">sửa</a>
                <a href="http://localhost/web_php/thuc-hanh-db1/delete.php?id=<?php echo $account["id"]?>">xóa</a>
            </td>
        </tr>

    <?php } ?>
</table>
</body>
</html>
