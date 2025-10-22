<?php 

  $hostname="localhost";
  $username="root";
  $password="";
  $db_name="fabrio_dine";
  
  $conn=mysqli_connect($hostname,$username,$password,$db_name);

if (mysqli_connect_errno()) {
        die("Error in DB connection! " . mysqli_connect_error());
    
    }else{

      echo "sefdv";
    }




?>