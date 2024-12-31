<?php
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO books (title, author, published_year, genre) VALUES ('$title', '$author', '$published_year', '$genre')";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_books.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333333;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Book</h2>
        <form method="post" action="">
            Title: <input type="text" name="title" required><br>
            Author: <input type="text" name="author" required><br>
            Published Year: <input type="number" name="published_year" required><br>
            Genre: <input type="text" name="genre" required><br>
            <input type="submit" value="Add Book">
        </form>
    </div>
</body>
</html>
