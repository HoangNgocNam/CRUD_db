<?php
include_once "connect-database.php";
$id = $_GET['id'];
$sql = "DELETE FROM account WHERE id=$id";
if (isset($conn)) {
    $conn->query($sql);
}
header("Location: http://localhost/web_php/thuc-hanh2");