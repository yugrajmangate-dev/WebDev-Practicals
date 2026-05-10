<?php
  $str = "hello world from php";
  $num = "000056.8";

  echo "Original: $str <br>";
  echo "a) Uppercase: "   . strtoupper($str) . "<br>";
  echo "b) Lowercase: "   . strtolower($str) . "<br>";
  echo "c) ucfirst: "     . ucfirst($str)    . "<br>";
  echo "d) ucwords: "     . ucwords($str)    . "<br>";
  echo "e) Remove leading zeros from $num: " . ltrim($num, '0') . "<br>";
  echo "f) Reverse: "     . strrev($str)     . "<br>";
  echo "f) Length: "      . strlen($str)     . "<br>";
  echo "f) Substring(0,5): " . substr($str, 0, 5) . "<br>";
?>