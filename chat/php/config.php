<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  // Enable error reporting (for development only)
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  // Connect to database
  $conn = mysqli_connect($hostname, $username, $password, $dbname);

  // Set character encoding to utf8mb4
  mysqli_set_charset($conn, "utf8mb4");

  // Check connection
  if (!$conn) {
      die("Database connection failed: " . mysqli_connect_error());
  }
?>
