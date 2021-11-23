<?php
include_once "connect_database.php";

$sql = "select * from account";
$result = $conn->query($sql);

$accounts = $result->fetch_all(MYSQLI_ASSOC);

include_once "list_account.php";