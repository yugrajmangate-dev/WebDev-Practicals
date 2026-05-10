<!DOCTYPE html>
<html>
<head><title>Array Search</title></head>
<body>
  <h2>Search Roll Number</h2>

  <form method="POST" action="">
    Enter Roll No: <input type="number" name="roll">
    <input type="submit" value="Search">
  </form>

<?php
  $rolls = array(101, 102, 103, 104, 105);
  echo "<p>Available Rolls: " . implode(", ", $rolls) . "</p>";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = $_POST['roll'];
    if (in_array($search, $rolls)) {
      echo "<p style='color:green'>Roll No $search FOUND!</p>";
    } else {
      echo "<p style='color:red'>Roll No $search NOT FOUND!</p>";
    }
  }
?>
</body>
</html>