<?php
include 'db.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Management Home</title>
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
            text-align: center;
            width: 400px;
            margin-top: 60px; /* Adjusted for navbar height */
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #555;
        }
        .nav-links {
            margin-top: 30px;
        }
        .nav-links a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 12px 25px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .nav-links a:hover {
            background-color: #45a049;
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
        <h2>Welcome to the Book Management System</h2>
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <div class="nav-links">
            <a href="manage_books.php">Manage Books</a>
        </div>
    </div>
</body>
</html>
