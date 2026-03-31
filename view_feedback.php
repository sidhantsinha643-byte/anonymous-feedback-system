<?php
include("config/db.php");
?>

<?php include("includes/header.php"); ?>

<div class="card">

<h2>All Anonymous Feedback</h2>

<?php

$result=$conn->query("SELECT * FROM feedback ORDER BY created_at DESC");

while($row=$result->fetch_assoc()){

echo "<div class='feedback-box'>";
echo "<strong>".$row['category']."</strong><br>";
echo $row['message']."<br>";
echo "<small>".$row['created_at']."</small>";
echo "</div>";

}
?>

</div>

<?php include("includes/footer.php"); ?>