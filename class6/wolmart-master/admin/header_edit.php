<?php
  require_once("../header.php");
  require_once("navver.php");
  require_once("../db.php");
  $id=$_GET['header_edit_id'];
  $get_query="SELECT * FROM service_head WHERE id=$id";
  $from_db=mysqli_query(dbconnect(),$get_query);
  $afterassocc=mysqli_fetch_assoc($from_db);
?>
<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card m-auto">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            Header Edit form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="header_edit_post.php" method="post">
                            <div class="mb-3">
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
                                <label class="form-lable text-capitalize">Black Header</label>
                                <input type="text" name="ser_head_h2" class="form-control" value="<?=$afterassocc['ser_head_h2']?>">
                                <input type="hidden" name="id" class="form-control" value="<?=$afterassocc['id']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">green Header</label>
                                <input type="text" name="ser_head_h2_sm" class="form-control" value="<?=$afterassocc['ser_head_h2_sm']?>">
                            </div>
                            <div class="mb-3">
                           
                                <label class="form-lable text-capitalize">Service Header Text</label>
                                <input type="text" name="ser_head_text" class="form-control"  value="<?=$afterassocc['ser_head_text']?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control btn btn-primary">Add Header</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>