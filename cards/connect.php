<?php
function connect_db() {
 $servername = "localhost";
 $username = "1704456";
 $password = "zeJY9J99c";
 $dbname = " a1704456";
 // Create connection

 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

