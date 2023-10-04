<?php
require('../db_connect.php');
$id=$_REQUEST['id'];
$query = "UPDATE student_participation_details SET status=0 WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: fp_output.php"); 
?>