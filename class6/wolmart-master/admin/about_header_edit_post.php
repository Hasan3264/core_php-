<?php
session_start();
require_once("../db.php");
$id= $_POST['id'];
   $ser_head_h2= filter_var($_POST['about_head_black'],FILTER_SANITIZE_STRING);
 $ser_head_h2_sm= filter_var($_POST['about_head_green'],FILTER_SANITIZE_STRING);
 $ser_head_text= filter_var($_POST['about_head_text'],FILTER_SANITIZE_STRING);
   if ($ser_head_h2 && $ser_head_h2 != NULL) {
       if ($ser_head_h2_sm && $ser_head_h2_sm != NULL) {
           if ($ser_head_text && $ser_head_text != NULL) {
                $update_query="UPDATE `about_heads` SET `about_head_black`='$ser_head_h2',`about_head_green`='$ser_head_h2_sm',`about_head_text`='$ser_head_text' WHERE id='$id'";
                $dbresult=mysqli_query(dbconnect(),$update_query);
                header('location: about_us_head.php');
                $_SESSION['hed_succed_msg'] ='Header added';
            }    
            else {
                  header('location: about_head_post.php');
                  $_SESSION['ban_detail_msg'] ='Header NOt Valid';
               }
        } 
       
   } 
