<?php
require_once("../header.php");
require_once("navver.php");
require_once("../db.php");
if (!isset($_SESSION['email'])) {
 header('location: ../login.php');
}
$get_bannerquery="SELECT * FROM banner";
 $dbresult=mysqli_query(dbconnect(),$get_bannerquery);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            banner add form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="banner_post.php" method="post" enctype="multipart/form-data">
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
                                <input type="text" name="banner_sub_title" class="form-control">
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
                                <input type="text" name="banner_title" class="form-control">
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
                                <input type="text" name="banner_details" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-lable text-capitalize">banner image</label>
                                <input type="file" name="banner_image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control btn btn-primary">Add Banner</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-capitalize">
                            banner list
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>id</th>
                                <th>banner sub title</th>
                                <th>banner title</th>
                                <th>banner details</th>
                                <th>location</th>
                                <th>active status</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                 <?php
                                  foreach ($dbresult as $key => $banner) {
                                 ?> 
                                     <tr>
                                         
                                         <td><?=$key+1?></td>
                                        
                                         <td><?=$banner['banner_sub_title']?></td>
                                         <td><?=$banner['baner_title']?></td>
                                         <td><?=$banner['baner_details']?></td>
                                         <td><img src="../<?=$banner['image_location']?>" alt="" style="width:100px;"></td>
                                         <td><?php
                                                if ($banner['active_status'] == 1):
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
                                                if ($banner['active_status'] == 2):
                                                ?>
                                                <a href="banner_active.php?banner_id=<?=$banner['id']?>" class="btn btn-primary">active</a>
                                                <?php
                                                else:
                                                ?>
                                                    <a href="banner_deactive.php?banner_de_id=<?=$banner['id']?>" class="btn btn-warning">de-active</a>
                                                <?php
                                                endif
                                                ?>
                                                <a href="banner_edit.php?banner_edit_id=<?=$banner['id']?>" class="btn btn-info"> edit</a>
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
<?php if (isset($_SESSION['ban_succsess_msg'])):?>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '<?=$_SESSION['ban_succsess_msg']?>',
        showConfirmButton: false,
        timer: 2000
})
                        </script>
   <?php endif ?>
   <?php unset($_SESSION['ban_succsess_msg']) ?>
  



<!-- d 	banner_sub_title 	baner_title 	baner_details 	image_location 	active_status 	 -->