<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php');
}
  $dbregult= "SELECT * FROM `service_head`";   
 $dbresult=mysqli_query(dbconnect(),$dbregult);
 
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize text-success">service header</h5>
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
                        <form action="service_head_post.php" method="post">
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">Black Heading</label>
                                  <input type="text" name="ser_head_h2" class="form-control">
                              </div>
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">green Heading</label>
                                  <input type="text" name="ser_head_h2_sm" class="form-control">
                              </div>
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">Service Heading Text</label>
                                  <input type="text" name="ser_head_text" class="form-control">
                              </div>
                              <div class="mb-3">
                                   <button class="btn btn-success text-uppercase">Add Header</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-info">
                            Header list
                        </div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>id</th>
                                <th>Black Heading</th>
                                <th>green Heading</th>
                                <th>Service Heading Text</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                 <?php
                                  foreach ($dbresult as $key => $banner) {
                                 ?> 
                                     <tr>
                                         
                                         <td><?=$key+1?></td>
                                        
                                         <td><?=$banner['ser_head_h2']?></td>
                                         <td><?=$banner['ser_head_h2_sm']?></td>
                                         <td><?=$banner['ser_head_text']?></td>
                                        <td><a href="header_edit.php?header_edit_id=<?=$banner['id']?>" class="btn btn-info">edit</a>
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

<!--  <div class="col-lg-3 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                           service edit form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="service_head_edit.php" method="post" enctype="multipart/form-data">
                                <label class="form-lable text-capitalize">ser_head_h2</label>
                                <input type="text" name="ser_head_h2" class="form-control">
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
                                <label class="form-lable text-capitalize">ser_head_h2_sm</label>
                                <input type="text" name="ser_head_h2_sm" class="form-control">
                            </div>
                           
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">ser_head_text</label>
                                <input type="text" name="ser_head_text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control btn btn-primary">Add Header</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            service header list
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>id</th>
                                <th>service header</th>
                                <th>service header green</th>
                                <th>service header text</th>
                               
                            </thead>
                            <tbody>
                                 <?php
                                  foreach ($dbresult as $key => $ser_head) {
                                 ?> 
                                     <tr>
                                         
                                         <td><?=$key+1?></td>
                                         <td><?=$ser_head['ser_head_h2']?></td>
                                         <td><?=$banner['ser_head_h2_sm']?></td>
                                         <td><?=$banner['ser_head_text']?></td>
                                     </tr>
                                 <?php
                                  }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
<!-- d 	banner_sub_title 	baner_title 	baner_details 	image_location 	active_status 	 -->