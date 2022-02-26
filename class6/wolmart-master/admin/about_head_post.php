<?php
session_start();
require_once("../db.php");

 $about_head_black= filter_var($_POST['about_head_black'],FILTER_SANITIZE_STRING);
 $about_head_green= filter_var($_POST['about_head_green'],FILTER_SANITIZE_STRING);
 $about_head_text= filter_var($_POST['about_head_text'],FILTER_SANITIZE_STRING);
   if ($about_head_black && $about_head_black != NULL) {
       if ($about_head_green && $about_head_green != NULL) {
           if ($about_head_text && $about_head_text != NULL) {
               $insert_query="INSERT INTO about_heads(`about_head_black`, `about_head_green`, `about_head_text`) VALUES ('$about_head_black','$about_head_green','$about_head_text')";
                $dbresult=mysqli_query(dbconnect(),$insert_query);
                header('location: about_us_head.php');
                $_SESSION['hed_succed_msg'] ='added';
            }    
        } else {
            header('location: about_us_head.php');
            $_SESSION['ban_detail_msg'] ='Header NOt Valid';
         }
       
   } 


?>