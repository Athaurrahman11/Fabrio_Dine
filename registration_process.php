<?php
include 'dbconnection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration successful!'); window.location='login.html';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
