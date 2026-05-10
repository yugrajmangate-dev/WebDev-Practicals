<!DOCTYPE html>
<html>
<head><title>Registration</title></head>
<body>
  <h2>Project Competition Registration</h2>

  <form method="POST" action="">
    Name:    <input type="text"   name="name"   required><br><br>
    Email:   <input type="email"  name="email"  required><br><br>
    College: <input type="text"   name="college" value="I2IT Pune"><br><br>
    Project: <input type="text"   name="project" required><br><br>
    Team Size:
    <select name="team">
      <option>1</option><option>2</option><option>3</option><option>4</option>
    </select><br><br>
    <input type="submit" value="Register">
  </form>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<hr><h3>Registration Details:</h3>";
    echo "<p>Name: "     . $_POST['name']    . "</p>";
    echo "<p>Email: "    . $_POST['email']   . "</p>";
    echo "<p>College: "  . $_POST['college'] . "</p>";
    echo "<p>Project: "  . $_POST['project'] . "</p>";
    echo "<p>Team Size: ". $_POST['team']    . "</p>";
  }
?>
</body>
</html>