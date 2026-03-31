<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location:login.php");
}
?>

<?php include("includes/header.php"); ?>

<div class="card">

<h2>Welcome <?php echo $_SESSION['user']; ?>👋</h2>

<p>
We value your opinion!  
<br>
Use this platform to share anonymous feedback about courses, faculty, and campus facilities.  
Your feedback helps us improve the overall campus experience for everyone.
</p>

</div>

<?php include("includes/footer.php"); ?>