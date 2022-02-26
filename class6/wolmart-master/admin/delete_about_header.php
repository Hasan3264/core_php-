<?php
session_start();
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php'); 
}
 $id=$_GET['delete_about_header_id'];
  $delt_query="DELETE FROM about_heads WHERE id=$id";
  mysqli_query(dbconnect(),$delt_query);
    header('location: about_us_head.php');
?>