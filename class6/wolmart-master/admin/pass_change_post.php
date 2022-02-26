<?php
session_start();
 require_once '../db.php';
 if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
}
$loged_email=$_SESSION['email'];
 if($_POST['old_password'] == NULL || $_POST['new_password']== NULL|| $_POST['confirm_password']== NULL){
    $_SESSION["confirm_password"]="ALL FIeld require";
    header('location: pas_change.php');
}
else {
    $old_pass=$_POST['old_password'];
    $new_pass=$_POST['new_password'];
    $confirm_pass=$_POST['confirm_password'];

    $pass_small=preg_match('@[a-z]@',$new_pass);
    $pass_cap = preg_match("@[A-Z]@",$new_pass);
    $pass_number = preg_match("@[0-9]@",$new_pass);
    $sp_char ='/[\'\~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
    $spasial_charecter = preg_match($sp_char,$new_pass);
    $pass_len= strlen($new_pass);
    if ($pass_small == 1 && $pass_cap == 1 && $pass_number  == 1 && $spasial_charecter == 1 && $pass_len >= 5 && $pass_len <=10 ) {
        if ($new_pass == $confirm_pass) {
             if ($new_pass != $old_pass) {
                   $encrift_old_pass=md5($old_pass);
                     $chacking_query = "SELECT COUNT(*) AS usersall FROM users WHERE email='$loged_email' AND password='$encrift_old_pass'";
                    $dbresult=mysqli_query(dbconnect(),$chacking_query);
                   $after_accoss= mysqli_fetch_assoc($dbresult);
                    if ($after_accoss['usersall'] == 1) {
                       $encrift_new_pass=md5($new_pass);
                       $update_pass=" UPDATE users SET password='$encrift_new_pass' WHERE email='$loged_email'";
                       mysqli_query(dbconnect(),$update_pass);
                       $_SESSION["updated_pass"]="Password updated";
                       header('location: pas_change.php');
                    }
                    else {
                        $_SESSION["pass_old_err"]="plese enter the correct password";
                    header('location: pas_change.php');
                    }
                }
                else {
                    $_SESSION["pass_newold_err"]="Password already tacken";
                    header('location: pas_change.php');
                }
            }
        else {
                $_SESSION["pass_match_err"]="Password dosn't match";
                header('location: pas_change.php');
            }
        }
    else {
        $_SESSION["valid_pass_err"]="Required 1 to 9 and A to Z and a to z and special cherecter in 5 to 10 cherecters";
        header('location: pas_change.php');
    }
}


// $update_query="UPDATE users SET first_name ='  $first_name',last_name='$last_name',phone='$phone' WHERE email='$email'";
// mysqli_query(dbconnect(),$update_query);
// $_SESSION["update_msg"]="Your data was updated";
// header('location: profile.php');
//  
?>