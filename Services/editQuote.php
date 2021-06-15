<?php
include '../Connection/Connection.php';

$id = $_POST['id'];
$author = $_POST['author'];
$category = $_POST['category'];
$quote = $_POST['quote'];


$conn->query("update quotestb
 set author='" . $author . "',category='" . $category . "',quote='" . $quote . "'
where id='" . $id . "'");
