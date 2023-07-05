<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomspex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$users = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (username, pass, email)
VALUES ('$users', '$pass', '$email')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>