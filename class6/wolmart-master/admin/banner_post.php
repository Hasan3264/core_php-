<?php
session_start();
require_once('../db.php');
$ban_sub_title=filter_var($_POST["banner_sub_title"], FILTER_SANITIZE_STRING);
$ban_title=filter_var($_POST["banner_title"], FILTER_SANITIZE_STRING);
$ban_details=filter_var($_POST["banner_details"], FILTER_SANITIZE_STRING);
$uploded_img_original_name = $_FILES['banner_image']['name'];
$uploded_img_original_size = $_FILES['banner_image']['size'];
if ($ban_sub_title && $ban_sub_title != NULL) {
   if ($ban_title && $ban_title != NULL) {
       if ($ban_details && $ban_details != NULL) {
            if ($uploded_img_original_size <= 2000000) {
                $after_explode= explode('.',$uploded_img_original_name);
                $image_extenion=end($after_explode);
                $support_extantion=array('jpg','JPG','jpeg','JPEG','png','PNG');
                if (in_array($image_extenion,$support_extantion)) {
                     $insert_query="INSERT INTO `banner`(`banner_sub_title`, `baner_title`, `baner_details`,`image_location`) VALUES ('$ban_sub_title','$ban_title','$ban_details','primary location')";
                     mysqli_query(dbconnect(),$insert_query);
                    $id_from_db = mysqli_insert_id(dbconnect());
                    $image_new_name =  $id_from_db .'.'.$image_extenion;
                     $save_location = "../upload/banner/".$image_new_name;
                    move_uploaded_file($_FILES['banner_image']['tmp_name'],$save_location);
                    $image_location="upload/banner/".$image_new_name;

                      $update_query="UPDATE banner SET image_location='$image_location' WHERE id=$id_from_db";
                      mysqli_query(dbconnect(),$update_query);
                    header('location: Banner.php');
                    $_SESSION['ban_succsess_msg'] ='Banner added success';

                }
                else{
                    header('location: Banner.php');
                    $_SESSION['ban_valid_msg'] ='enter a valid file';
                   
                }
            }
            else {
                header('location: Banner.php');
                $_SESSION['ban_size_msg'] ='File is too long';
               }
            
        }
        else {
            header('location: Banner.php');
            $_SESSION['ban_detail_msg'] ='Banner details correct';
           }
    } 
   else {
    header('location: Banner.php');
    $_SESSION['ban_title_msg'] ='Banner title not correct';
   }
}
else {
    header('location: Banner.php');
    $_SESSION['ban_sub_msg'] ='Banner Subtitle not correct';
}
?>