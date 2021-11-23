<?php
include_once "connect-database.php";
$id = $_GET['id'];
// lay thong tin dua theo id
// viet query de lay du lieu
$sql = "select*from account where id = $id";
// cau lenh de chay sql
if (isset($conn)) {
    $result = $conn->query($sql);
}
$account = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // lay gia tri
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    // viet cau sql insert into
    $sql = "UPDATE account SET email='$email', password='$pass', name= '$name', address= '$address',
                   phone= '$phone'  WHERE id= '$id'";
    // thuc thi cau lenh sql de them vao databae
    if (isset($conn)) {
        $result = $conn->query($sql);
        header("Location: http://localhost/web_php/thuc-hanh2");
    }
}
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
<form action="" method="post">
    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $account['email'] ?>"><br>
    <label>Password:</label><br>
    <input type="text" name="pass" value="<?= $account['password'] ?>"><br>
    <label>Name:</label><br>
    <input type="text" name="name" value="<?= $account['name'] ?>"><br>
    <label>address:</label><br>
    <input type="text" name="address" value="<?= $account['address'] ?>"><br>
    <label>phone:</label><br>
    <input type="text" name="phone" value="<?= $account['phone'] ?>">
    <label></label><br>
    <button type="submit">
        update
    </button>
</form>
</body>
</html>
