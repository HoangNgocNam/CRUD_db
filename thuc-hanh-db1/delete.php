<?php
include_once "connect-database1.php";

$id = $_GET["id"];

$sql = "DELETE FROM account WHERE id=$id";

if (isset($conn)) {
    $conn->query($sql);
    header("Location: index.php");
}


