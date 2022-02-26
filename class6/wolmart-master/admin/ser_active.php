<?php
session_start();
require_once('../db.php');
  $id=$_GET['banner_id'];
 
 $update_query="UPDATE `service_item` SET `active_status`='2' WHERE id=$id";
  mysqli_query(dbconnect(),$update_query);
  header('location: ser_item.php');
?>