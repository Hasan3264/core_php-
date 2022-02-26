<?php
session_start();
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php'); 
}
 $id=$_GET['massage_id'];
  $delt_query="DELETE FROM gust_massegs WHERE id=$id";
  mysqli_query(dbconnect(),$delt_query);
    header('location: gest_gest_msg.php');
?>