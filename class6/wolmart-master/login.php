
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
                  
                    <?php
                                 if (isset($_SESSION['login_err'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['login_err'];
                                  unset($_SESSION['login_err']);
                                ?>
                                </div>
                                <?php
                                  }
                                ?>
                   
                    <?php
                                 if (isset($_SESSION['fillup'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['fillup'];
                                  unset($_SESSION['fillup']);
                                ?>
                                </div>
                                <?php
                                  }
                                ?>
                 
                    <form action="login_resul.php"  method="post">
                        <ul class="form-style-1">
                            <li>
                                <label style="font-size:15px;">Email<span class="required">*</span></label>
                                <input style='padding:15px;' type="TEXT" name="email" class="field-long" />
                                
                            </li>
                                <label style="font-size:15px;" >password<span class="required">*</span></label>
                                <input style='padding:10px;' type="password" name="password" class="field-long" />
                            </li>
                            <li>
                            <input style="Color:white;background-color:#4B99AD; padding: 7px 30px;font-size: 15px;" type="submit" value="log In"/>
                            <span>or</span>
                            <a href="register_main.php" style="Color:white;background-color:#4B99AD; padding: 7px 30px;font-size: 15px;">Sing In</a>  
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>