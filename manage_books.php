<?php
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result === FALSE) {
    echo "Error: " . $conn->error;
} elseif ($result->num_rows == 0) {
    echo "No books found.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Management</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .navbar {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
        }
        .navbar a.logout {
            float: right;
            margin-right: 20px;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 900px;
            margin-top: 60px; /* Adjusted for navbar height */
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .add-book {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }
        .add-book:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .action-links a {
            text-decoration: none;
            color: #fff;
            background-color: #f0ad4e;
            padding: 5px 10px;
            border-radius: 5px;
            margin: 0 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .action-links a:hover {
            background-color: #ec971f;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a class="logout" href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h2>Book Management</h2>
        <a class="add-book" href="create.php">Add Book</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['author'] . "</td>";
                    echo "<td class='action-links'><a href='update.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No books found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
