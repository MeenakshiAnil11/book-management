<!DOCTYPE html>
<html>
<head>
    <title>Book Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .navbar {
            background-color: rgba(51, 51, 51, 0.8);
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-grow: 1;
        }
        h1 {
            color: black; /* Change text color to black */
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.7); /* Add light text shadow */
            font-size: 36px;
        }
        .quote {
            text-align: center;
            font-style: italic;
            margin-bottom: 20px;
            font-size: 25px; /* Increase font size */
            color: black; /* Change text color to black */
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.7); /* Add light text shadow */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
    <div class="container">
        <h1>Welcome to the Book Management System</h1>
    </div>
    <div class="quote">
        <p>"A room without books is like a body without a soul." – Marcus Tullius Cicero</p>
    </div>
</body>
</html>
