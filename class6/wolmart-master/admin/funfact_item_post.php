<?php
 session_start();
 require_once '../db.php';

 $funfact_item_number= $_POST['funfact_item_number'];
 $funfact_item_name= $_POST['funfact_item_name'];
 $flag= true;

 if(!$funfact_item_number){
      $_SESSION['fun_num_err']='Fun Number inValid';
      $flag=false;
 }
 if(!$funfact_item_name){
      $_SESSION['fun_name_err']='Fun Name inValid';
      $flag=false;
 }
 if($flag){
      $insert_querry="INSERT INTO funfact_item(funfact_item_number,funfact_item_name) VALUES ('$funfact_item_number','$funfact_item_name')";
      mysqli_query(dbconnect(),$insert_querry);
      header('location: funfact_item.php');
 }
?>