<?php
session_start();
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php'); 
}
 $id=$_GET['funfact_item_del'];
  $delt_query="DELETE FROM funfact_item WHERE id=$id";
  mysqli_query(dbconnect(),$delt_query);
    header('location: funfact_item.php');
?>