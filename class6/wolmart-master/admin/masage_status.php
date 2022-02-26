<?php
session_start();
 require_once('../db.php');
  $id=$_GET['massage_id'];
  
  $update_query="UPDATE `gust_massegs` SET `re_status`='1' WHERE id=$id";
   mysqli_query(dbconnect(),$update_query);
   header('location: gest_gest_msg.php');
?>
  
