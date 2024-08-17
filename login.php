<?php
session_start();
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT id, password FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password== $row['password']) {
        $_SESSION['user'] = $email;
        header('Location: welcome.php');
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found with that email";
}

/*$sql = "SELECT id, password FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $email;
        header('Location: welcome.php');
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found with that email";
}
*/

$conn->close();
?>
