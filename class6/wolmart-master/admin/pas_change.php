<?php
require_once('../header.php');
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
}
?>
<?php
 require_once('navver.php');
 require_once('../db.php');
 $get_query= "SELECT first_name,last_name,phone,email FROM users";
 $from_db=mysqli_query(dbconnect(),$get_query);
 $after_acc0ss=mysqli_fetch_assoc($from_db);


?>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-10 m-auto">
            <div class="card mt-4">
               <div class="card-header bg-success">
                  <h2 class='card-title text-capitalize'>change password</h2>
               </div>
               <div class="card_body">
                   <div class="pass_change">
                   <?php
                                 if (isset($_SESSION['updated_pass'])) {
                                ?> 
                                <div class="alert alert-success" role="alert">
                                <?php
                                  echo  $_SESSION['updated_pass'];
                                  unset($_SESSION['updated_pass']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                   <?php
                                 if (isset($_SESSION['confirm_password'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['confirm_password'];
                                  unset($_SESSION['confirm_password']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                   <?php
                                 if (isset($_SESSION['pass_old_err'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['pass_old_err'];
                                  unset($_SESSION['pass_old_err']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                   <?php
                                 if (isset($_SESSION['pass_newold_err'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['pass_newold_err'];
                                  unset($_SESSION['pass_newold_err']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                   <?php
                                 if (isset($_SESSION['pass_match_err'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['pass_match_err'];
                                  unset($_SESSION['pass_match_err']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                   <?php
                                 if (isset($_SESSION['valid_pass_err'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['valid_pass_err'];
                                  unset($_SESSION['valid_pass_err']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                   </div>
               <form action="pass_change_post.php" method="post">
                             <div class="mb-3">
                            
                                 <label class="text-primary text-capitalize">Old password</label>
                                 <input type="password" name="old_password" class="form-control">
                             </div>
                             <div class="mb-3">
                                 <label class="text-primary text-capitalize">NEW password</label>
                                 <input type="password" name="new_password" class="form-control">
                             </div>
                             <div class="mb-3">
                                 <label class="text-primary text-capitalize">confirm password</label>
                                 <input type="password" name="confirm_password" class="form-control">
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