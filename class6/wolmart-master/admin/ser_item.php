<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php');
}
  $dbregult= "SELECT * FROM `service_item`";   
 $dbresult=mysqli_query(dbconnect(),$dbregult);
 
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize text-success">service item</h5>
                    </div>
                    <div class="card-body">
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
                        <?php
                                 if (isset($_SESSION['ban_detail_msg'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['ban_detail_msg'];
                                  unset($_SESSION['ban_detail_msg']);
                                ?>
                                </div>
                                <?php
                                  }
                                ?>
                        </div>
                        <div class="mb-3">
                        <?php
                                 if (isset($_SESSION['ban_title_msg'])) {
                                ?> 
                                <div class="alert alert-danger" role="alert">
                                <?php
                                  echo  $_SESSION['ban_title_msg'];
                                  unset($_SESSION['ban_title_msg']);
                                ?>
                                </div>
                                <?php
                                  }
                                ?>
                        </div>
                        <form action="ser_item_post.php" method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">service item Heading</label>
                                  <input type="text" name="ser_item_h2" class="form-control">
                              </div>
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">service text</label>
                                  <input type="text" name="ser_item_text" class="form-control">
                              </div>
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">Service item img</label>
                                  <input type="file" name="ser_item_img" class="form-control">
                              </div>
                              <div class="mb-3">
                                   <button class="btn btn-success text-uppercase">Add Service Item</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-info">
                           Servicw item list
                        </div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>id</th>
                                <th>service item Heading</th>
                                <th>service text</th>
                                <th>Service item img</th>
                                <th>active status</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                 <?php
                                  foreach ($dbresult as $key => $banner) {
                                 ?> 
                                     <tr>
                                         <td><?=$key+1?></td>
                                         <td><?=$banner['ser_item_h2']?></td>
                                         <td><?=$banner['ser_item_text']?></td>
                                         <td><img src="../<?=$banner['image_location']?>" alt="" style="width:100px;"></td>
                                        <td><?php
                                                if ($banner['active_status'] == 2):
                                                ?>
                                                <span class="badge badge-sm bg-success">active</span>
                                                <?php
                                                else:
                                                ?>
                                                 <span class="badge badge-sm bg-warning" style="cursor:pointer;">deactive</span>
                                                <?php
                                                endif
                                                ?>
                                           </td>
                                           <td>
                                           <div class="btn-group" role="group" aria-label="Basic example">
                                           <?php
                                                if ($banner['active_status'] == 1):
                                                ?>
                                                <a href="ser_active.php?banner_id=<?=$banner['id']?>" class="btn btn-primary">active</a>
                                                <?php
                                                else:
                                                ?>
                                                    <a href="ser_deactive.php?banner_de_id=<?=$banner['id']?>" class="btn btn-warning">de-active</a>
                                                <?php
                                                endif
                                                ?>
                                                <a href="service_item_edit.php?service_item_edit_id=<?=$banner['id']?>" class="btn btn-info">edit</a>
                                                <a href="delete_ser_item.php?delete_id=<?=$banner['id']?>" class="btn btn-danger">delete</a>
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
    </div>
</section>

