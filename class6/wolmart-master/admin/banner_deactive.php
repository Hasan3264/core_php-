<?php
session_start();
require_once('../db.php');
  $id=$_GET['banner_de_id'];
 
 $update_query="UPDATE `banner` SET `active_status`='2' WHERE id=$id";
  mysqli_query(dbconnect(),$update_query);
  header('location: Banner.php');
?>