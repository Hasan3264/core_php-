<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php'); 
}
$id=$_GET['banner_edit_id'];
 $get_query="SELECT * FROM banner WHERE id=$id";
 
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
                            banner Edit form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="banner_edit_post.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                            <?php
                              if (isset($_SESSION['ban_sub_msg'])) {
                            ?> 
                            <div class="alert alert-warning" role="alert">
                                <?php
                                  echo  $_SESSION['ban_sub_msg'];
                                  unset($_SESSION['ban_sub_msg']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                                <label class="form-lable text-capitalize">banner sub title</label>
                                <input type="text" name="banner_sub_title" class="form-control" value="<?=$afterassocc['banner_sub_title']?>">
                                <input type="hidden" name="id" class="form-control" value="<?=$afterassocc['id']?>">
                            </div>
                            <div class="mb-3">
                            <?php
                              if (isset($_SESSION['ban_title_msg'])) {
                            ?> 
                            <div class="alert alert-warning" role="alert">
                                <?php
                                  echo  $_SESSION['ban_title_msg'];
                                  unset($_SESSION['ban_title_msg']);
                                ?>
                            </div>
                            <?php
                              }
                            ?>
                                <label class="form-lable text-capitalize">banner title</label>
                                <input type="text" name="banner_title" class="form-control" value="<?=$afterassocc['baner_title']?>">
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
                                <label class="form-lable text-capitalize">banner details</label>
                                <input type="text" name="banner_details" class="form-control"  value="<?=$afterassocc['baner_details']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">banner image</label>
                                <input type="file" name="banner_image" class="form-control">
                            </div>
                            <div class="mb-3">
                            <td><img src="../<?=$afterassocc['image_location']?>" alt="" style="width:100px;"></td>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control btn btn-primary">Add Banner</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
