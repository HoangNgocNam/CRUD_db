<?php
include_once "connect-database1.php";

$id = $_GET['id'];

$sql = "select*from account where id=$id";

if (isset($conn)) {
    $result = $conn->query($sql);
}
$account = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $address = $_REQUEST["address"];
    $phone = $_REQUEST["phone"];

    $sql = "UPDATE account SET name='$name', email='$email', password='$password',
                    address='$address', phone='$phone' WHERE id='$id'";

    if (isset($conn)) {
        $conn->query($sql);
        header("Location: index.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<form action="" method="post">
    <table class="table table-striped table-hover">
        <tr>
            <td>Name:
                <input type="text" class="form-control" name="name" placeholder="nhập đầy đủ họ tên " value="<?php echo $account['name']?>">
            </td>
        </tr>
        <tr>
            <td>Email:
                <input type="text" class="form-control" name="email" placeholder="nhập địa chỉ email " value="<?php echo $account['email']?>">
            </td>
        </tr>
        <tr>
            <td>Password:
                <input type="text" class="form-control" name="password" placeholder="nhập password " value="<?php echo $account['password']?>">
            </td>
        </tr>
        <tr>
            <td>Address:
                <input type="text" class="form-control" name="address" placeholder="nhập địa chỉ " value="<?php echo $account['address']?>">
            </td>
        </tr>
        <tr>
            <td>Phone:
                <input type="text" class="form-control" name="phone" placeholder="nhập số điện thoại " value="<?php echo $account['phone']?>">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">UpDate</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
