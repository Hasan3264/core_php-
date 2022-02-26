<?php
session_start();
 require_once('../db.php');

 print_r($_POST);

 $gest_name=$_POST['name'];
 $gest_email=$_POST['email'];
 $gest_msg=$_POST['message'];
 $insart_query="INSERT INTO `gust_massegs`(`gust_name`,`gust_email`, `massage`) VALUES ('$gest_name','$gest_email','$gest_msg')";
  print_r($insart_query);
 mysqli_query(dbconnect(),$insart_query);
 header('location: ../index.php');
?>
