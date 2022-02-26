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
            <div class="col-lg-6 m-auto">
                <div class="card mt-4">
                    <div class="card-header bg-warning">
                           <h5 class="text-capitalize text-white d-flex justify-content-between">Profile information <a href="profile_change.php" class="btn btn-sm btn-danger text-dark ">Change</a></h5>
                    </div>
                    <div class="card-body">
                        <div class="err_masge">
                        <?php
                                 if (isset($_SESSION['edit_errr'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['edit_errr'];
                                  unset($_SESSION['edit_errr']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                         <form action="profile_edit_post.php" method="post">
                             <div class="mb-3">
                             <input type="hidden" name="logged_email" class="form-control" value="<?= $after_assoc['email']?>">
                                 <label class="text-primary text-capitalize">last name</label>
                                 <input type="text" name="first_name" class="form-control" value="<?= $after_assoc['first_name']?>">
                             </div>
                             <div class="mb-3">
                                 <label class="text-primary text-capitalize">last name</label>
                                 <input type="text" name="last_name" class="form-control" value="<?= $after_assoc['last_name']?>">
                             </div>
                             <div class="mb-3">
                                 <label class="text-primary text-capitalize">phone</label>
                                 <input type="text" name="phone" class="form-control" value="<?= $after_assoc['phone']?>">
                             </div>
                             <div class="mb-3">
                                 <button type="submit" class="btn btn-warning text-capitalize">update</button>
                             </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>