<?php
  $subjects = array("Maths","Physics","Chemistry","English","CS");
  $marks    = array(85, 72, 90, 65, 88);

  echo "<h3>Marks Report</h3>";
  echo "<table border='1' cellpadding='6'>";
  echo "<tr><th>Subject</th><th>Marks</th></tr>";
  for ($i = 0; $i < count($subjects); $i++) {
    echo "<tr><td>" . $subjects[$i] . "</td><td>" . $marks[$i] . "</td></tr>";
  }
  echo "</table>";

  $total   = array_sum($marks);
  $max     = max($marks);
  $percent = ($total / 500) * 100;

  echo "<p>Total: $total</p>";
  echo "<p>Maximum: $max</p>";
  echo "<p>Percentage: $percent %</p>";
?>