<?php
 session_start();
 require_once '../db.php';
 $loged_email=$_SESSION['email'];
 if($_POST['first_name'] == NULL || $_POST['last_name']== NULL|| $_POST['phone']== NULL){
           $_SESSION["edit_errr"]="ALL FIeld require";
           header('location: profile_change.php');
 }
 else {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];
    $email=$_POST['logged_email'];

     $update_query="UPDATE users SET first_name ='  $first_name',last_name='$last_name',phone='$phone' WHERE email='$email'";
    mysqli_query(dbconnect(),$update_query);
    $_SESSION["update_msg"]="Your data was updated";
    header('location: profile.php');
 }
?>