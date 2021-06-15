<?php
include '../Connection/Connection.php';

$author = $_POST['author'];
$category = $_POST['category'];
$quote = $_POST['quote'];




$conn->query("INSERT into quotestb(author,category,quote) values('" . $author . "','" . $category . "','" . $quote . "')");
