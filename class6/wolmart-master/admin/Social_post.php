<?php
 session_start();
    require_once '../db.php';
     
    $social_link=$_POST['social_link'];
     $social_icon=$_POST['social_icon'];

   
    echo $social_insert="INSERT INTO `socials`(`social_link`, `social_icon`) VALUES ('$social_link','$social_icon')";
    mysqli_query(dbconnect(),$social_insert);

    header('location: social_media.php');
?>