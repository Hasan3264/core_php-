<?php
  require_once '../db.php';
    foreach ($_POST['check'] as $key => $check) {
        // $get_query=  "UPDATE `gust_massegs` SET `id`='$key' WHERE id=$key";
        $get_query="DELETE FROM `gust_massegs` WHERE id=$key";
         $from_db=mysqli_query(dbconnect(),$get_query);
    }
    header('location: gest_gest_msg.php');
?>
