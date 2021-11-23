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
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>Name</th>
        <th>Address</th>
    </tr>
    <?php if (isset($accounts)) {
        foreach ($accounts as $item) { ?>
            <tr>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['email']?></td>
                <td><?php echo $item['password']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['address']?></td>
            </tr>
        <?php }
    } ?>


</table>
</body>
</html>
