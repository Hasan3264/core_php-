<?php
session_start();
require_once('../db.php');
  $id=$_GET['banner_id'];
 
 $update_query="UPDATE `banner` SET `active_status`='1' WHERE id=$id";
  mysqli_query(dbconnect(),$update_query);
  header('location: Banner.php');
?>
