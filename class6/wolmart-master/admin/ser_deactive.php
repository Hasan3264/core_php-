<?php
session_start();
require_once('../db.php');
  $id=$_GET['banner_de_id'];
 
 $update_query="UPDATE `service_item` SET `active_status`='1' WHERE id=$id";
  mysqli_query(dbconnect(),$update_query);
  header('location: ser_item.php');
?>