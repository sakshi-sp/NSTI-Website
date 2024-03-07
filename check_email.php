<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "nsti";
$dbname = "student_record";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];

// SQL to check if email already exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo 'exists';
} else {
    echo 'not_exists';
}

$conn->close();
?>
