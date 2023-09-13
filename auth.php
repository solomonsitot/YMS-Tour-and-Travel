<?php
session_start();
$userid = $_POST['userid'];
$password = $_POST['password'];

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'reservation_db');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to retrieve the stored passwords
$sql = "SELECT ID, password FROM password";
$result = mysqli_query($conn, $sql);

// Check if the user's ID and password match any of the stored passwords
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['ID'] == $userid && $row['password'] == $password) {
        // If a match is found, start a session and redirect the user to the home page
        $_SESSION['userid'] = $userid;
        header("Location: welcome.php");
        exit();
    }
}

// If no match is found, display an error message
echo "Invalid user ID or password";

// Close the database connection
mysqli_close($conn);

// Code to destroy session when the user logs out
