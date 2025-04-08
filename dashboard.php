<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #372D65;
            padding: 15px 30px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            height: 60px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: white;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        .nav-links li {
            display: inline-block;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            background: #6BAEF0;
            border-radius: 8px;
            transition: background 0.3s ease-in-out;
        }

        .nav-links a:hover, 
        .nav-links a.active {
            background: #4A90E2;
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .nav-links {
                margin-top: 10px;
                flex-direction: column;
                gap: 10px;
            }
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        .welcome-message {
            font-size: 24px;
            font-weight: bold;
            color: #372D65;
        }

        .logout-btn {
            margin-top: 15px;
            padding: 10px 20px;
            background: #6BAEF0;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease-in-out;
        }

        .logout-btn:hover {
            background: #4A90E2;
        }
    </style>
</head>
<body>

<header class="navbar">
    <div class="logo">Simple Login Page</div>
    <nav>
        <ul class="nav-links">
            <li><a href="dashboard.php" class="active">Home</a></li>
            <li><a href="features.html">Features</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>
</header>

<!-- Centered Welcome Message -->
<div class="container">
    <h2 class="welcome-message">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="index.php" class="logout-btn">Logout</a>
</div>

</body>
</html>
