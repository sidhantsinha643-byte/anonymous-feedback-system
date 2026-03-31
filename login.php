<?php
include("config/db.php");
session_start();

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$result=$conn->query("SELECT * FROM users WHERE email='$email'");
$user=$result->fetch_assoc();

if($user && password_verify($password,$user['password'])){

$_SESSION['user']=$user['name'];

header("Location:dashboard.php");

}else{

$error="Invalid login";

}

}
?>

<?php include("includes/header.php"); ?>

<div class="card">

<h2>Login</h2>

<?php if(isset($error)) echo $error; ?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

<?php include("includes/footer.php"); ?>