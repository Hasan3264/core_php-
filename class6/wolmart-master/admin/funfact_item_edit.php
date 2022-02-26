<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php'); 
}
$id=$_GET['banner_edit_id'];
 $get_query="SELECT * FROM funfact_item WHERE id=$id";
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
                    <form action="funfact_edit_item_post.php" method="post">
                            <div class="mb-3">
                            <?php
                              if (isset($_SESSION['fun_num_err'])) {
                            ?> 
                            <div class="alert alert-success" role="alert">
                                <?php
                                  echo  $_SESSION['fun_num_err'];
                                  unset($_SESSION['fun_num_err']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                                <label class="form-lable text-capitalize">Funfact Item NUmber</label>
                                <input type="text" name="funfact_item_number" class="form-control">
                                <input type="hidden" name="id" class="form-control" value="<?=$afterassocc['id']?>">
                            </div>
                            <div class="mb-3">
                            <?php
                              if (isset($_SESSION['fun_name_err'])) {
                            ?> 
                            <div class="alert alert-warning" role="alert">
                                <?php
                                  echo  $_SESSION['fun_name_err'];
                                  unset($_SESSION['fun_name_err']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                                <label class="form-lable text-capitalize">Funfact Item Name</label>
                                <input type="text" name="funfact_item_name" class="form-control">
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
