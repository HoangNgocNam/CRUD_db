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
<form action="" method="post">
    <table class="table table-striped table-hover">
        <tr>
            <td>Name:
                <input type="text" class="form-control" name="name" placeholder="nhập đầy đủ họ tên ">
            </td>
        </tr>
        <tr>
            <td>Email:
                <input type="text" class="form-control" name="email" placeholder="nhập địa chỉ email ">
            </td>
        </tr>
        <tr>
            <td>Password:
                <input type="text" class="form-control" name="password" placeholder="nhập password ">
            </td>
        </tr>
        <tr>
            <td>Address:
                <input type="text" class="form-control" name="address" placeholder="nhập địa chỉ ">
            </td>
        </tr>
        <tr>
            <td>Phone:
                <input type="text" class="form-control" name="phone" placeholder="nhập số điện thoại ">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Add</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
include_once "connect-database1.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $sql = "INSERT INTO account (name, email, password, address, phone)
                VALUES ('$name', '$email', '$password', '$address', '$phone')";

    if (isset($conn)) {
        $conn->query($sql);
        header("Location: index.php");
    }
}
