<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - WeCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-container {
            margin-top: 80px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard</span>
        <div class="d-flex">
            <span class="navbar-text text-white me-3">
                Hello, <?= htmlspecialchars($_SESSION['user']) ?>
            </span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<!-- Dashboard Content -->
<div class="container dashboard-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 text-center">
                <h3 class="mb-3">Welcome <?= htmlspecialchars($_SESSION['user']) ?>!</h3>
                <p class="lead">This is your personalized dashboard.</p>
                <p>You can now access your account information, settings, or continue exploring the site.</p>
                <!-- Add more dashboard options here if needed -->
            </div>
        </div>
    </div>
</div>

</body>
</html>
