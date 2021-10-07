<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql_basic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE logins (
   id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(255) NOT NULL,
   pswd CHAR(40) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table logins created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>