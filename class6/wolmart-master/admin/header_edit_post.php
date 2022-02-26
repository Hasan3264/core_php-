<?php
session_start();
require_once("../db.php");
$id= $_POST['id'];
$dbregult= "SELECT COUNT(*) AS total_header FROM service_head";
$dbresult=mysqli_query(dbconnect(),$dbregult);
$after_assoc=$afterassocc=mysqli_fetch_assoc($dbresult);
if ($after_assoc['total_header'] == 1) {
   $ser_head_h2= filter_var($_POST['ser_head_h2'],FILTER_SANITIZE_STRING);
 $ser_head_h2_sm= filter_var($_POST['ser_head_h2_sm'],FILTER_SANITIZE_STRING);
 $ser_head_text= filter_var($_POST['ser_head_text'],FILTER_SANITIZE_STRING);
   if ($ser_head_h2 && $ser_head_h2 != NULL) {
       if ($ser_head_h2_sm && $ser_head_h2_sm != NULL) {
           if ($ser_head_text && $ser_head_text != NULL) {
                $update_query="UPDATE `service_head` SET `ser_head_h2`='$ser_head_h2',`ser_head_h2_sm`='$ser_head_h2_sm',`ser_head_text`='$ser_head_text' WHERE id='$id'";
                $dbresult=mysqli_query(dbconnect(),$update_query);
                header('location: ser_header.php');
                $_SESSION['hed_succed_msg'] ='Header added';
            }    
            else {
                  header('location: header_edit.php');
                  $_SESSION['ban_detail_msg'] ='Header NOt Valid';
               }
        } 
       
   } 
}
else {
     header('location: header_edit.php');
     $_SESSION['ban_title_msg'] ='Header Al ready tacken';
   }
?>