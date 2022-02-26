<?php
session_start();
//db info
require_once("db.php");

// //information from form

$first_name = filter_var($_POST["first_name"], FILTER_SANITIZE_STRING);
$last_name = filter_var($_POST["last_name"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);  
$password = $_POST["password"];
$VALIDATE_EMAIL = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($first_name) {
  if ($last_name) {
    if ($email) {
      if ($VALIDATE_EMAIL) {
        $check_email_query="SELECT COUNT(*) AS total_email FROM users WHERE email='$VALIDATE_EMAIL'";
        $db_resul=mysqli_query(dbconnect(), $check_email_query);
        $after_assoc=mysqli_fetch_assoc($db_resul);
        if ($after_assoc['total_email'] == 0 ) {  
          if ($phone) {
             //password rools
              $pass_small=preg_match('@[a-z]@',$password);
              $pass_cap = preg_match("@[A-Z]@",$password);
              $pass_number = preg_match("@[0-9]@",$password);
              $sp_char ='/[\'\~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
              $spasial_charecter = preg_match( $sp_char,$password);
              $pass_len= strlen($password);
              if ($pass_small == 1 && $pass_cap == 1 && $pass_number  == 1 && $spasial_charecter == 1 && $pass_len >= 5 && $pass_len <=10 ) {
                $enc_pass= md5($password);
                $insart_querry= "INSERT INTO users(first_name,last_name,email,phone,password) VALUES ('$first_name','$last_name','$email','$phone','$enc_pass')";
                 mysqli_query(dbconnect(),$insart_querry);
                  header('location:register_main.php');
                  $_SESSION['succes_msg'] ='Successed';
              }
              else {
                $_SESSION['err_password'] ='Password is unvalid';
                header('location: register_main.php');
              }
          }
          else {
            $_SESSION['err_Phone'] ='Phone Is unvalid';
            header('location: register_main.php');
          }
        }
        else {
          $_SESSION['err_Email_Stored'] ='Email all ready Registred';
          header('location: register_main.php');
        }
      }
      else {
        $_SESSION['err_Email_Valid'] ='Email Not Valid';
        header('location: register_main.php');
      }
    }
   
  }
  else {
    $_SESSION['err_Lname'] ='Last Name Not Valid';
    header('location: index.php'); 
  }
}
else {
   $_SESSION['err_Fname'] ='First Name Not Valid';
   header('location: register_main.php'); 
}
?>  