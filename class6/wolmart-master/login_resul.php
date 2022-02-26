<?php
session_start();
 require_once("db.php");
 $email=$_POST["email"];
$password=md5($_POST["password"]);
 $sheck_query="SELECT COUNT(*) AS total_users FROM users WHERE email='$email' AND password='$password'";
 $from_db=mysqli_query(dbconnect(),$sheck_query);
 $afterasos=mysqli_fetch_assoc($from_db);
 if ($afterasos['total_users'] ==1) {
   $_SESSION['email']=$email;
   $_SESSION['user']="yes";
  header("location: admin/deshbord.php");
 }
 elseif ( $email == NULL && $password == NULL) {
  $_SESSION['fillup']="plese fill up";
  header("location: login.php");
 }
 else {
   $_SESSION["login_err"]='Plese chack or register';
   header("location: login.php");
 }

?>