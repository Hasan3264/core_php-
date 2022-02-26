<?php
  require_once '../db.php';
   $id=$_GET['banner_id'];
   $update_query="UPDATE `about_heads` SET `active_status`='1' WHERE id!=$id";
   $update_query2="UPDATE `about_heads` SET `active_status`='2' WHERE id=$id";
   mysqli_query(dbconnect(),$update_query);
   mysqli_query(dbconnect(),$update_query2);
   header('location: about_us_head.php');
?>