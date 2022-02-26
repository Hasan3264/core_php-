<?php
require_once('../header.php');
require_once('navver.php');
require_once('../db.php');
if(!isset($_SESSION['email'])){
    header('location: ../login.php');
}
$loged_email=$_SESSION['email'];
$get_query= "SELECT first_name,last_name,phone,email FROM users WHERE email='$loged_email'";
$dbresult=mysqli_query(dbconnect(),$get_query);
$after_assoc=mysqli_fetch_assoc($dbresult);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card mt-4">
                    <div class="card-header bg-primary">
                           <h5 class="text-capitalize text-white d-flex justify-content-between">Profile information <a href="profile_change.php" class="btn btn-sm btn-warning text-dark ">edit</a></h5>
                    </div>
                    <div class="card-body">
                        <div class="update_mdg">
                        <?php
                                 if (isset($_SESSION['update_msg'])) {
                                ?> 
                                <div class="alert alert-success" role="alert">
                                <?php
                                  echo  $_SESSION['update_msg'];
                                  unset($_SESSION['update_msg']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                        
                        </div>
                        <ul>
                            <li>First Name:-  <?= $after_assoc['first_name']?></li>
                            <li>Last Name:-  <?= $after_assoc['last_name']?></li>
                            <li>Phone:-  <?= $after_assoc['phone']?></li>
                            <li>Email:-   <?= $after_assoc['email']?></li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>