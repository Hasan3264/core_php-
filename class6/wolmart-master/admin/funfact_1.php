<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php');
}
$get_bannerquery="SELECT * FROM funfacts_first";
 $dbresult=mysqli_query(dbconnect(),$get_bannerquery);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            funfact first add form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="funfact_one_post.php" method="post" enctype="multipart/form-data">
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
                                <input type="text" name="funfact_small" class="form-control">
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
                                <input type="text" name="funfact_head_black" class="form-control">
                            </div>
                            <div class="mb-3">
                           
                                <label class="form-lable text-capitalize">funfact head green</label>
                                <input type="text" name="funfact_head_green" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">Funfact second text</label>
                                <input type="text" name="funfact_first_text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">Funfact third text</label>
                                <input type="text" name="funfact_second_text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control btn btn-primary">Add to funfact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            Funfact list
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>id</th>
                                <th>Funfact first text</th>
                                <th>Funfact head black</th>
                                <th>funfact head green</th>
                                <th>Funfact second text</th>
                                <th>Funfact third text</th>
                                <th>active status</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                 <?php
                                  foreach ($dbresult as $key => $banner) {
                                 ?> 
                                     <tr>
                                         
                                         <td><?=$key+1?></td>
                                        
                                         <td><?=$banner['funfact_small']?></td>
                                         <td><?=$banner['funfact_head_black']?></td>
                                         <td><?=$banner['funfact_head_green']?></td>
                                         <td><?=$banner['funfact_first_text']?></td>
                                         <td><?=$banner['funfact_second_text']?></td>
                                         <td>  <?php
                                                if ($banner['active_status'] == 2):
                                                ?>
                                                <a href="funfact_active.php?banner_id=<?=$banner['id']?>" class="btn btn-primary">active</a>
                                                <?php
                                                else:
                                                ?>
                                                    <a href="#" class="btn btn-warning">de-active</a>
                                                <?php
                                                endif
                                                ?>
                                                
                                                </td>
                                           <td>
                                           <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="funfact_edit.php?banner_edit_id=<?=$banner['id']?>" class="btn btn-info"> edit</a>
                                                <a href="delete.php?delete_id=<?=$banner['id']?>" class="btn btn-danger">delete</a>
                                            </div>
                                           </td>
                                     </tr>
                                 <?php
                                  }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- d 	banner_sub_title 	baner_title 	baner_details 	image_location 	active_status 	 -->