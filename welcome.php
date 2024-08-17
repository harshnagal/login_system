<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit();
}

include'connect.php';

$email = $_SESSION['user'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo "Welcome, " . htmlspecialchars($user['firstname']) . " " . htmlspecialchars($user['lastname']) . "<br>";
    echo "Date of Birth: " . htmlspecialchars($user['dob']) . "<br>";
    echo "Address: " . htmlspecialchars($user['address']) . "<br>";
    echo "Phone: " . htmlspecialchars($user['phone']) . "<br>";
    echo "Email: " . htmlspecialchars($user['email']) . "<br>";
} else {
    echo "User not found";
}

$conn->close();
?>
<a href="logout.php">Logout</a>
