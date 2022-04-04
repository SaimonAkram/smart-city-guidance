<?php 
$con = mysqli_connect('localhost', 'root', '', 'cgs_db');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>