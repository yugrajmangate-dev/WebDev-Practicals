<!DOCTYPE html>
<html>
<head><title>Feedback Form</title></head>
<body>
  <h2>Feedback Form</h2>

  <form method="POST" action="">
    Name:     <input type="text"  name="name"     required><br><br>
    Email:    <input type="email" name="email"    required><br><br>
    Rating:
    <select name="rating">
      <option>Excellent</option>
      <option>Good</option>
      <option>Average</option>
      <option>Poor</option>
    </select><br><br>
    Feedback: <textarea name="feedback" rows="3"></textarea><br><br>
    <input type="submit" value="Submit Feedback">
  </form>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<hr><h3>Your Feedback:</h3>";
    echo "<p>Name: "     . $_POST['name']     . "</p>";
    echo "<p>Email: "    . $_POST['email']    . "</p>";
    echo "<p>Rating: "   . $_POST['rating']   . "</p>";
    echo "<p>Feedback: " . $_POST['feedback'] . "</p>";
    echo "<p>Date: " . date("d-m-Y") . " | Time: " . date("h:i:s A") . "</p>";
  }
?>
</body>
</html>