<?php
 session_start();
 require_once '../db.php';
 $id= $_POST['id'];
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
      $insert_querry="UPDATE `funfact_item` SET funfact_item_number='$funfact_item_number',`funfact_item_name`='$funfact_item_name' WHERE id='$id'";
      mysqli_query(dbconnect(),$insert_querry);
      header('location: funfact_item.php');
 }
?>