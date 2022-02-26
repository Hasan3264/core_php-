
<?php
  require_once('header.php');
  if (isset($_SESSION['email'])) {
    header('location: admin/deshbord.php');
}
?>
    <section id="logo_part">
        <div class="container px-lg-0">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <form action="register.php"  method="post">
                    
                        <ul class="form-style-1">
                            <?php
                              if (isset($_SESSION['succes_msg'])) {
                            ?> 
                            <div class="alert alert-success" role="alert">
                                <?php
                                  echo  $_SESSION['succes_msg'];
                                  unset($_SESSION['succes_msg']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                            <?php
                                 if (isset($_SESSION['err_Email_Stored'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['err_Email_Stored'];
                                  unset($_SESSION['err_Email_Stored']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                            <li><label>Full Name<span class="required">*</span></label><input type="text" name="first_name" class="field-divided" placeholder="First" /> 
                           <input type="text" name="last_name" class="field-divided" placeholder="Last" />
                           <?php
                              if (isset($_SESSION['err_Fname'])) {
                            ?> 
                            <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['err_Fname'];
                                  unset($_SESSION['err_Fname']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                           <?php
                              if (isset($_SESSION['err_Lname'])) {
                            ?> 
                            <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['err_Lname'];
                                  unset($_SESSION['err_Lname']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                            </li>
                            
                            <li>
                                <label>Email<span class="required">*</span></label>
                                <input type="TEXT" name="email" class="field-long" />
                                <?php
                                 if (isset($_SESSION['err_Email_Valid'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['err_Email_Valid'];
                                  unset($_SESSION['err_Email_Valid']);
                                ?>
                                </div>
                                <?php
                                  }
                                ?>
                            </li>
                            <li>
                                <label>Your number<span class="required">*</span></label>
                                <input type="number" name="phone" class="field-long" />
                            <?php
                                 if (isset($_SESSION['err_Phone'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['err_Phone'];
                                  unset($_SESSION['err_Phone']);
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                            </li>
                            <li>
                                <label>password<span class="required">*</span></label>
                                <input type="password" name="password" class="field-long" />
                            <?php
                                 if (isset($_SESSION['err_password'] )) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['err_password'] ;
                                  unset($_SESSION['err_password'] );
                                ?>
                                </div>
                            <?php
                                }
                            ?>
                            </li>
                            <li>
                                <input type="submit" value="Sign In" placeholder="Sign In"/>
                                <span>or</span>
                                <a href="login.php" style="Color:white;background-color:#4B99AD; padding: 7px 30px;font-size: 15px;">Log In</a> 
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
 </body>
</html>