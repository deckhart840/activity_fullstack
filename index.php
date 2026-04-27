<?php
// David Eckhart
// April 27, 2026

$conn = new mysqli("localhost", "phpuser", "password", "mysql");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connection Started!";
}

$conn->close();
?>
