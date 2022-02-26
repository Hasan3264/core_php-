<?php
session_start();
require_once("../db.php");
$id= $_POST['id'];
$funfact_small= filter_var($_POST['funfact_small'],FILTER_SANITIZE_STRING);
 $funfact_head_black= filter_var($_POST['funfact_head_black'],FILTER_SANITIZE_STRING);
 $funfact_head_green= filter_var($_POST['funfact_head_green'],FILTER_SANITIZE_STRING);
 $funfact_first_text= filter_var($_POST['funfact_first_text'],FILTER_SANITIZE_STRING);
 $funfact_second_text= filter_var($_POST['funfact_second_text'],FILTER_SANITIZE_STRING);
   if ($funfact_small && $funfact_small != NULL) {
       if ($funfact_head_black && $funfact_head_black != NULL) {
           if ($funfact_head_green && $funfact_head_green != NULL) {
            if ($funfact_first_text && $funfact_first_text != NULL) {
                if ($funfact_second_text && $funfact_second_text != NULL) {
                    $update_query="UPDATE funfacts_first SET funfact_small='$funfact_small',funfact_head_black='$funfact_head_black',funfact_head_green='$funfact_head_green',funfact_first_text='$funfact_first_text',funfact_second_text='$funfact_second_text' WHERE id='$id'";
                    $dbresult=mysqli_query(dbconnect(),$update_query);
                    header('location: funfact_1.php');
                    $_SESSION['hed_succed_msg'] ='Header added';
                } 
            } 
            }    
            else {
                  header('location: about_head_post.php');
                  $_SESSION['ban_detail_msg'] ='Header NOt Valid';
               }
        } 
       
   } 
   