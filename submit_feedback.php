<?php
include("config/db.php");
session_start();

if(isset($_POST['submit'])){

$category=$_POST['category'];
$message=$_POST['message'];

$sql="INSERT INTO feedback(category,message)
VALUES('$category','$message')";

if ($conn->query($sql) === TRUE) {
    echo "
    <div class='thankyou-card'>
        <h2>🎉 Thank You for Your Feedback!</h2>
        <p>Your feedback has been successfully submitted.</p>
        <p>We truly appreciate your time and suggestions.</p>
        <a href='index.php' class='back-btn'>Go Back to Home</a>
    </div>
    ";
} else {
    echo "Error: " . $conn->error;
}
}
?>

<?php include("includes/header.php"); ?>

<div class="card">

<h2>Submit Anonymous Feedback</h2>

<?php if(isset($msg)) echo $msg; ?>

<form method="POST">

<select name="category">

<option>Course</option>
<option>Faculty</option>
<option>Campus Facilities</option>

</select>

<textarea name="message" placeholder="Write feedback..."></textarea>

<button name="submit">Submit</button>

</form>

</div>

<?php include("includes/footer.php"); ?>