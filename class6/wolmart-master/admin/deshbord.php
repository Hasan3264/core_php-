<?php
require_once('../header.php');
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
}
?>
<?php
 require_once('navver.php');
 require_once('../db.php');
 $get_query= "SELECT first_name,last_name,phone,email FROM users";
 $from_db=mysqli_query(dbconnect(),$get_query);
 $after_acc0ss=mysqli_fetch_assoc($from_db);


?>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-10 m-auto">
            <div class="card mt-4">
               <div class="card-header bg-success">
                  <h2 class='card-title text-capitalize'>all users list</h2>
               </div>
               <div class="card_body">
                  <table class="table  table-bordered">
                     <thead>
                        <th>Fiest Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                     </thead>
                     <tbody>
                        <?php
                         foreach($from_db as $users)
                         {
                         ?>
                         <td><?= $users['first_name']?></td>
                           <td><?= $users['last_name']?></td>
                           <td><?= $users['phone']?></td>
                           <td>@<?= $users['email']?></td>
                        </tr>
                        <?php     
                         }
                        ?>
                        <tr>
                        
                     </tbody>
                  </table>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>