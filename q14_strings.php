<?php
  $str = "Hello World";

  echo "Original: "  . $str . "<br>";
  echo "Length: "    . strlen($str) . "<br>";
  echo "Reverse: "   . strrev($str) . "<br>";
  echo "Substring: " . substr($str, 0, 5) . "<br>";
  echo "Upper: "     . strtoupper($str) . "<br>";
  echo "Lower: "     . strtolower($str) . "<br>";
  echo "Replace: "   . str_replace("World", "PHP", $str) . "<br>";
?>