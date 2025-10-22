<?php
  include 'dbconnection.php';

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $comments=$_POST['Comments'];


  $sql="INSERT INTO contact_details(name,email,phone,comments) VALUES('$name','$email','$phone','$comments')";


if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Submitted....'); window.location='index.html';</script>";
} else {
  echo "Error: " . mysqli_error($conn);
}



?>