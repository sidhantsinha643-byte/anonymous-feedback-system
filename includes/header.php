<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Anonymous Feedback System</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/theme.js"></script>
</head>

<body>

<header class="main-header">

<div class="logo">

<img src="images/adbu.png" alt="University Logo" class="logo-img">

<a href="index.php">Assam Don Bosco University</a>

</div>

<nav class="nav-menu">

<a href="index.php">Home</a>

<?php if(isset($_SESSION['user'])){ ?>

<a href="dashboard.php">Dashboard</a>
<a href="submit_feedback.php">Submit Feedback</a>
<a href="view_feedback.php">View Feedback</a>
<a href="logout.php">Logout</a>

<?php } else { ?>

<a href="login.php">Login</a>
<a href="register.php">Register</a>

<?php } ?>

<button class="theme-btn" onclick="toggleTheme()">🌓</button>

</nav>

</header>

<div class="container">