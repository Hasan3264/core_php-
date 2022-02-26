<?php
session_start();
require_once('../db.php');
$ser_item_h2=filter_var($_POST["ser_item_h2"], FILTER_SANITIZE_STRING);
$ser_item_text=filter_var($_POST["ser_item_text"], FILTER_SANITIZE_STRING);
$uploded_img_original_name = $_FILES['ser_item_img']['name'];
$uploded_img_original_size = $_FILES['ser_item_img']['size'];
if ($ser_item_h2 && $ser_item_h2 != NULL) {
   if ($ser_item_text && $ser_item_text != NULL) {
            if ($uploded_img_original_size <= 2000000) {
                $after_explode= explode('.',$uploded_img_original_name);
                $image_extenion=end($after_explode);
                $support_extantion=array('jpg','JPG','jpeg','JPEG','png','PNG');
                if (in_array($image_extenion,$support_extantion)) {
                     $insert_query="INSERT INTO `service_item`(`ser_item_h2`, `ser_item_text`, `image_location`) VALUES ('$ser_item_h2','$ser_item_text','primary location')";
                     mysqli_query(dbconnect(),$insert_query);
                    $id_from_db = mysqli_insert_id(dbconnect());
                    $image_new_name =  $id_from_db .'.'.$image_extenion;
                     $save_location = "../upload/service_img/".$image_new_name;
                    move_uploaded_file($_FILES['ser_item_img']['tmp_name'],$save_location);
                    $image_location="upload/service_img/".$image_new_name;  
                      $update_query="UPDATE service_item SET image_location='$image_location' WHERE id=$id_from_db";
                     mysqli_query(dbconnect(),$update_query);
                    header('location: ser_item.php');

                }
                else{
                    // header('location: Banner.php');
                    $_SESSION['ban_valid_msg'] ='enter a valid file';
                   
                }
            }
            else {
                // header('location: Banner.php');
                $_SESSION['ban_size_msg'] ='File is too long';
               }
            
        
        
    } 
   else {
    // header('location: Banner.php');
    $_SESSION['ban_title_msg'] ='Banner title not correct';
   }
}
else {
    // header('location: Banner.php');
    $_SESSION['ban_sub_msg'] ='Banner Subtitle not correct';
}
?>