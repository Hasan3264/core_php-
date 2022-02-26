<?php
session_start();
require_once('../db.php');
  $id=$_GET['fun_fact_id'];
 
 $update_query="UPDATE `funfact_item` SET `active_status`='1' WHERE id=$id";
  mysqli_query(dbconnect(),$update_query);
  header('location: funfact_item.php');
?>