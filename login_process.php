<?php
include 'dbconnection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        echo "<script>alert('Login successful! Welcome $username'); window.location='index.html';</script>";
    } else {
        echo "<script>alert('Invalid password!'); window.location='login.html';</script>";
    }
} else {
    echo "<script>alert('User not found!'); window.location='login.html';</script>";
}
?>
