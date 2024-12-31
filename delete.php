<?php
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$book_id = $_GET['id'];
$sql = "DELETE FROM books WHERE id='$book_id'";

if ($conn->query($sql) === TRUE) {
    header("Location: manage_books.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
