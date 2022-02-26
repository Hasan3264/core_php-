<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php');
}
  $dbregult= "SELECT * FROM `about_heads`";   
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
                        <form action="about_head_post.php" method="post">
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">Black Heading</label>
                                  <input type="text" name="about_head_black" class="form-control">
                              </div>
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">green Heading</label>
                                  <input type="text" name="about_head_green" class="form-control">
                              </div>
                              <div class="mb-3">
                              <label class="form-lable text-capitalize">Heading Text</label>
                                  <input type="text" name="about_head_text" class="form-control">
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
                                <th>active status</th>
                                <th>action</th>
                                <th>action</th>
                              
                            </thead>
                            <tbody>
                                 <?php
                                  foreach ($dbresult as $key => $banner) {
                                 ?> 
                                     <tr>
                                         
                                         <td><?=$key+1?></td>
                                        
                                         <td><?=$banner['about_head_black']?></td>
                                         <td><?=$banner['about_head_green']?></td>
                                         <td><?=$banner['about_head_text']?></td>
                                           <td>  <?php
                                                if ($banner['active_status'] == 2):
                                                ?>
                                                <a href="about_head_active.php?banner_id=<?=$banner['id']?>" class="btn btn-primary">active</a>
                                                <?php
                                                else:
                                                ?>
                                                    <a href="#" class="btn btn-warning">de-active</a>
                                                <?php
                                                endif
                                                ?>
                                                </td>
                                            <td>
                                                <a href="about_head_edit.php?about_head_edit_id=<?=$banner['id']?>" class="btn btn-info"> edit</a>
                                                </td>
                                                <td>
                                                <a href="delete_about_header.php?delete_about_header_id=<?=$banner['id']?>" class="btn btn-danger">delete</a>
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