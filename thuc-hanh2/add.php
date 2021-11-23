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
    <input type="text"  name="email"><br>
    <label>Password:</label><br>
    <input type="text" name="pass"><br>
    <label>Name:</label><br>
    <input type="text"  name="name"><br>
    <label>address:</label><br>
    <input type="text" name="address"><br>
    <label>phone:</label><br>
    <input type="text"  name="phone">
    <label></label><br>
    <button type="submit">
        Add
    </button>
</form>
</body>
</html>
<?php
    include_once "connect-database.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // lay gia tri
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        // viet cau sql insert into
        $sql = "INSERT INTO account (email, password, name, address, phone) VALUES ('$email',  '$pass', '$name',  '$address', '$phone')";
        // thuc thi cau lenh sql de them vao databae
        if (isset($conn)) {
            $conn->query($sql);
            header("Location: http://localhost/web_php/thuc-hanh2");
        }
    }
?>
