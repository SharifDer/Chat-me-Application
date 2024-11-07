<?php
include_once "php/config.php";
if (isset($_GET['My info'])) {
  header('location:../login.php');
}



$userprofile = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : false;
$query = "SELECT * FROM users WHERE unique_id=('$userprofile')";
$result = mysqli_query($conn, $query);
$col = mysqli_fetch_assoc($result);