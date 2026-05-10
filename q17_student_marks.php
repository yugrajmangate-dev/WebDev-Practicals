<!DOCTYPE html>
<html>
<head><title>Student Marks</title></head>
<body>
  <h2>Student Marks Form</h2>

  <form method="POST" action="">
    Name: <input type="text" name="name" required><br><br>
    <?php for($i=1; $i<=5; $i++): ?>
      Subject <?=$i?>: <input type="number" name="marks[]" min="0" max="100"><br><br>
    <?php endfor; ?>
    <input type="submit" value="Submit">
  </form>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name   = $_POST['name'];
    $marks  = $_POST['marks'];
    $total  = array_sum($marks);
    $avg    = $total / count($marks);
    $max    = max($marks);

    echo "<hr><h3>Result</h3>";
    echo "<p>Name (Original): $name</p>";
    echo "<p>Name (Uppercase): " . strtoupper($name) . "</p>";
    echo "<p>Name Length: " . strlen($name) . "</p>";
    echo "<p>Total: $total / 500</p>";
    echo "<p>Average: $avg</p>";
    echo "<p>Highest: $max</p>";
  }
?>
</body>
</html>