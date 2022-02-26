<?php
   require_once("../header.php");
   require_once("navver.php");
   require_once("../db.php");
   if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
}

$grt_query="SELECT * FROM gust_massegs";
$fro_db=mysqli_query(dbconnect(),$grt_query)
?>

<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-10 m-auto">
            <div class="card mt-4">
               <div class="card-header bg-success">
                  <h2 class='card-title text-capitalize'>all gusts massages</h2>
               </div>
               <div class="card_body">
                <form action="delet_all_msage.php" method="post">
                <table class="table  table-bordered">
                     <thead>
                        <th>sl</th>
                        <th>mark</th>
                        <th>gust Name</th>
                        <th>gust email</th>
                        <th>gust massage</th>
                        <th>action</th>
                     </thead>
                     <tbody>
                        <?php
                         foreach($fro_db as $key=> $massage)
                         {
                         ?>
                         <tr class="<?php
                           if ($massage['re_status']==1) {
                               echo"bg-info";
                           }
                           else {
                               echo "text-dark";
                           }
                         ?>"> 
                         <td><?=$key?></td>
                         <td><input type="checkbox" name="check[<?=$massage['id']?>]"></td>
                         <td><?= $massage['gust_name']?></td>
                           <td><?=$massage['gust_email']?></td>
                           <td><?=$massage['massage']?></td>
                           <td>
                               <?php
                                if ($massage['re_status'] == 2):
                                    
                               ?>
                                    <a href="masage_status.php?massage_id=<?=$massage['id']?>"class="btn btn-sm btn-warning">mark as reed</a>
                                    <?php
                                  else:
                                    ?>
                                     <button value="masage_dlt.php?massage_id=<?=$massage['id']?>" class="btn btn-sm btn-danger deletbtn">Delate</button>
                               <?php
                                   endif
                               ?>
                               <!-- " -->
                           </td>
                        </tr>
                        <?php     
                         }
                        ?>
                        
                        
                     </tbody>
                     <tfoot>
                        <tr>
                           <td></td>
                           <td>
                              <button type="submit" class="btn btn-danger">delete All</button>
                           </td>
                        </tr>
                     </tfoot>
                  </table>
                </form>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
                        </body>
                        </html>

                        <script>
                           $(document).ready(function(){
                                 $('.deletbtn').click(function(){
                                    var link=$(this).val();
                                    Swal.fire({
                                          title: 'Are you sure?',
                                          text: "You won't be able to revert this!",
                                          icon: 'warning',
                                          showCancelButton: true,
                                          confirmButtonColor: '#3085d6',
                                          cancelButtonColor: '#d33',
                                          confirmButtonText: 'Yes, delete it!'
                                          }).then((result) => {
                                          if (result.isConfirmed) {
                                             window.location.href = link;
                                             Swal.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                             )
                                          }
                                          })
                                 })
                           });
                        </script>