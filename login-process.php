<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kengen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve submitted form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Prepare and execute SQL query
$sql = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
$sql->bind_param("ss", $user, $pass);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    // User exists, redirect to homepage
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;
    header("Location: homepage.html");
    exit();
} else {
    $_SESSION['errorMsg'] = "Incorrect credentials. Please try again.";
    // Redirect back to the login page
    header("Location: login.php");
    exit();
}
$sql->close();
$conn->close();
?>
