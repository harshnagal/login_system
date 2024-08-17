<?php
include 'connect.php';

$email = $_POST['email'];
$sql = "SELECT id FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "exists";
} else {
    echo "available";
}

$conn->close();
?>
