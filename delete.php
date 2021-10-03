<?php
$conn = new mysqli("localhost","root","root","crudapp") or die("connection failed");
$id = $_GET['id'];
 $delete =  "DELETE FROM `todo` WHERE id = '$id' ";
mysqli_query($conn,$delete);
  header('location:display.php');
?>