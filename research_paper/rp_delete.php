<?php
require('../db_connect.php');
$id=$_REQUEST['id'];
$query = "UPDATE research_paper_details SET status=0 WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: rp_output.php"); 
?>

