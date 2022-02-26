<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php'); 
}
$id=$_GET['banner_edit_id'];
 $get_query="SELECT * FROM funfacts_first WHERE id=$id";
 
 $from_db=mysqli_query(dbconnect(),$get_query);
  $afterassocc=mysqli_fetch_assoc($from_db);
//   header('location: Banner.php');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card m-auto">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            funfact Edit form
                        </h5>
                    </div>
                    <div class="card-body">
                    <form action="funfact_one_edit_post.php" method="post">
                            <div class="mb-3">
                            <?php
                              if (isset($_SESSION['hed_succed_msg'])) {
                            ?> 
                            <div class="alert alert-success" role="alert">
                                <?php
                                  echo  $_SESSION['hed_succed_msg'];
                                  unset($_SESSION['hed_succed_msg']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                                <label class="form-lable text-capitalize">Funfact first text</label>
                                <input type="text" name="funfact_small" class="form-control" value="<?=$afterassocc['funfact_small']?>">
                            </div>
                            <div class="mb-3">
                            <?php
                              if (isset($_SESSION['ban_detail_msg'])) {
                            ?> 
                            <div class="alert alert-warning" role="alert">
                                <?php
                                  echo  $_SESSION['ban_detail_msg'];
                                  unset($_SESSION['ban_detail_msg']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                                <label class="form-lable text-capitalize">funfact head black</label>
                                <input type="text" name="funfact_head_black" class="form-control" value="<?=$afterassocc['funfact_head_black']?>">
                                <input type="hidden" name="id" class="form-control" value="<?=$afterassocc['id']?>">
                            </div>
                            <div class="mb-3">
                           
                                <label class="form-lable text-capitalize">funfact head green</label>
                                <input type="text" name="funfact_head_green" class="form-control" value="<?=$afterassocc['funfact_head_green']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">Funfact second text</label>
                                <input type="text" name="funfact_first_text" class="form-control" value="<?=$afterassocc['funfact_first_text']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">Funfact third text</label>
                                <input type="text" name="funfact_second_text" class="form-control" value="<?=$afterassocc['funfact_second_text']?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control btn btn-primary">Add to funfact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
