<?php
include'connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

// $dob_date = new DateTime($dob);
// $today = new DateTime();
// $age = $today->diff($dob_date)->y;

// if ($age < 18) {
//     die("You must be at least 18 years old.");
// }

$sql = "INSERT INTO users (firstname, lastname, dob, address, phone, email, password) VALUES ('$firstName', '$lastName', '$dob', '$address', '$phone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
    $_SESSION['user'] = $email;
    header('Location: login.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
