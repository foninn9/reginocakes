<?php
$servername = "localhost";
$database = "panaderia";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, "", "Pasteleria");
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}