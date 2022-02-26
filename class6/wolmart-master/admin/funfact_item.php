<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php');
}
$get_bannerquery="SELECT * FROM funfact_item";
 $dbresult=mysqli_query(dbconnect(),$get_bannerquery);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            funfact item add form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="funfact_item_post.php" method="post">
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
            <div class="col-lg-9 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            Funfact Item list
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>id</th>
                                <th>Funfact Item Number</th>
                                <th>Funfact Item Name</th>
                                <th>active status</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                 <?php
                                  foreach ($dbresult as $key => $banner) {
                                 ?> 
                                     <tr>
                                         
                                         <td><?=$key+1?></td>
                                        
                                         <td><?=$banner['funfact_item_number']?></td>
                                         <td><?=$banner['funfact_item_name']?></td>
                                         <td>  <?php
                                                if ($banner['active_status'] == 2):
                                                ?>
                                                <a href="funfact_item_active.php?fun_fact_id=<?=$banner['id']?>" class="btn btn-primary">active</a>
                                                <?php
                                                else:
                                                ?>
                                                    <a href="funfact_item_deactive.php?fun_fact_id=<?=$banner['id']?>" class="btn btn-warning">de-active</a>
                                                <?php
                                                endif
                                                ?>
                                                
                                                </td>
                                           <td>
                                           <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="funfact_item_edit.php?banner_edit_id=<?=$banner['id']?>" class="btn btn-info"> edit</a>
                                                <a href="funfact_item_del.php?funfact_item_del=<?=$banner['id']?>" class="btn btn-danger">delete</a>
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