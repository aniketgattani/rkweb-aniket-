<?php
$servername = "localhost";
$username = "root";
$password = "newpassword";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username = stripcslashes($username);
$password = stripcslashes($password);
$batch = stripcslashes($batch);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$batch = mysql_real_escape_string($batch);
$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('$username', '$password', '$batch')";

if ($conn->query($sql) === TRUE) {
    echo " Created Account  successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>