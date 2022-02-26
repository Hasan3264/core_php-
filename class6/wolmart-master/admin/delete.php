<?php
session_start();
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php'); 
}
 $id=$_GET['delete_id'];
 $get_query="SELECT image_location FROM banner WHERE id=$id";
  $from_db=mysqli_query(dbconnect(),$get_query);
  $afterassocc=mysqli_fetch_assoc($from_db);
  unlink('../'.$afterassocc['image_location']);
  $delt_query="DELETE FROM `banner` WHERE id=$id";
  mysqli_query(dbconnect(),$delt_query);
    header('location: Banner.php');
?>


