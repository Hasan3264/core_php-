<?php
session_start();
require_once("../db.php");

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
                        $insert_querye="INSERT INTO `funfacts_first`(`funfact_small`, `funfact_head_black`, `funfact_head_green`, `funfact_first_text`, `funfact_second_text`) VALUES ('$funfact_small','$funfact_head_black','$funfact_head_green','$funfact_first_text','$funfact_second_text')";
                        mysqli_query(dbconnect(),$insert_querye);                     
                        header('location: funfact_1.php');
                        $_SESSION['hed_succed_msg'] ='added';
                    }	 	 	 	
                } 
            } 
        } 
        else {
            header('location: funfact_1.php.php');
            $_SESSION['ban_detail_msg'] ='plese check Valid';
        }
    } 
?>
