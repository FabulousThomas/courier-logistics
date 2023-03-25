<?php
require './inc/head.php';
require './inc/navbar.php';

if (isset($_POST['btn-change-password'])) {
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $user_email = $_SESSION['user_email'];

   if ($password !== $cpassword) {
      flashMsg('message', 'Passwords do not match', 'alert alert-danger');
      redirect('index.php?message');
   } else if (strlen($password) < 6) {
      flashMsg('message', 'Passwords must be at least 6 characters', 'alert alert-danger');
      redirect('index.php?message');
   } else {
      $stmt = $conn->prepare("UPDATE users SET user_pass=? WHERE user_email = ?");
      $stmt->bind_param('ss', md5($password), $user_email);

      if ($stmt->execute()) {
         flashMsg('message', 'Password updated successfully');
         redirect('index.php?message');
      } else {
         flashMsg('message', 'Could not update password', 'alert alert-danger');
         redirect('index.php?message');
      }
   }
}
?>


<main class="py-5">
   <div class="mx-lg-5 mx-3">
      <?php if (isset($_GET['message'])) : ?>
         <?php flashmsg('message'); ?>
      <?php endif; ?>
      <h2 class="text-center mb-0">Manage Package Information</h2>
      <p class="text-center">You can manage package from here.</p>
      <div class="col-12">
         <div class="table-responsive">
            <table class="table table-hover table-bordered">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Receiver Name</th>
                     <th scope="col">Package ID</th>
                     <th scope="col">Tracking No.</th>
                     <th scope="col">Order Date</th>
                     <th scope="col">Destination</th>
                     <th scope="col">Transit Location</th>
                     <th scope="col">Auto Track</th>
                     <th scope="col">Delivery Status</th>
                     <th scope="col">Photo (Change)</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $selectAll = selectAll('products');
                  $i = 1 ?>
                  <?php if (mysqli_num_rows($selectAll) > 0) : ?>
                     <?php foreach ($selectAll as $row) : ?>
                        <tr>
                           <th scope="row"><?= $i++ ?></th>
                           <td><?= $row['r_name'] ?></td>
                           <td><?= $row['p_id'] ?></td>
                           <td><?= $row['t_id'] ?></td>
                           <td><?= $row['order_date'] ?></td>
                           <td><?= $row['d_location'] ?></td>
                           <?php if (isset($row['transit'])) {
                              if ($row['transit'] == 'Not set yet') { ?>
                                 <td class='text-danger'><?= $row['transit'] ?></td>
                              <?php } else { ?>
                                 <td class=''><?= $row['transit'] ?> <span class="blink bg-success ms-1"></span> </td>
                           <?php }
                           } ?>
                           <td><?= $row['auto_track'] ?></td>
                           <td><?= $row['p_status'] ?></td>
                           <td hidden><?= $row['s_name'] ?></td>
                           <td hidden><?= $row['s_email'] ?></td>
                           <td hidden><?= $row['r_email'] ?></td>
                           <td hidden><?= $row['s_phone'] ?></td>
                           <td hidden><?= $row['r_phone'] ?></td>
                           <td hidden><?= $row['s_postcode'] ?></td>
                           <td hidden><?= $row['r_postcode'] ?></td>
                           <td hidden><?= $row['s_address'] ?></td>
                           <td hidden><?= $row['r_address'] ?></td>
                           <td hidden><?= $row['p_name'] ?></td>
                           <td hidden><?= $row['p_weight'] ?></td>
                           <td hidden><?= $row['ship_cost'] ?></td>
                           <td hidden><?= $row['h_charges'] ?></td>
                           <td hidden><?= $row['pay_status'] ?></td>
                           <td hidden><?= $row['p_type'] ?></td>
                           <td hidden><?= $row['p_pieces'] ?></td>
                           <td hidden><?= $row['transit'] ?></td>
                           <td hidden><?= $row['o_location'] ?></td>
                           <td hidden><?= $row['arival_date'] ?></td>
                           <td>
                              <a type="button" class="update-image"><img src="../uploads/<?= $row['image'] ?>" width="50px" class="img-fluid"></a>
                           </td>
                           <td>
                              <div class="dropdown open"></div>
                                 <a class="btn btn-light btn-sm dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown">
                                    Action
                                 </a>
                                 <div class="dropdown-menu text-white shadow border-0 rounded-0" aria-labelledby="triggerId">

                                    <a class="text-white btn btn-sm bg-warning rounded-0 dropdown-item generate_tracking_no">Regenerate Tracking ID</a>

                                    <a class="text-white btn btn-sm bg-info rounded-0 dropdown-item view-package" href="receipt.php">View Package</a>

                                    <a class="text-white btn btn-sm bg-primary rounded-0 dropdown-item edit-package" type="button">Edit Package</a>

                                    <a class="text-white btn btn-sm bg-danger rounded-0 dropdown-item delete-package" type="button">Delete Package</a>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  <?php else : ?>
                     <tr>
                        <td colspan="20" class="text-center">No Data Found</td>
                     </tr>
                  <?php endif; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</main>

<?php require './inc/footer.php'; ?>

<script>
   $(document).ready(function() {
      $('.delete-package').on('click', function() {
         $('#delete-modal').modal('show');

         $tr = $(this).closest("tr");
         var data = $tr.children("td").map(function() {
            return $(this).text();
         }).get();

         $('#p_id').val(data[1]);
      });

      $('.generate_tracking_no').on('click', function() {
         $('#generate_tracking_no-modal').modal('show');

         $tr = $(this).closest("tr");
         var data = $tr.children("td").map(function() {
            return $(this).text();
         }).get();

         $('#pack_id').val(data[1]);
         $('#track_id').val(data[2]);
      });

      $('.update-image').on('click', function() {
         $('#update-image-modal').modal('show');

         $tr = $(this).closest("tr");
         var data = $tr.children("td").map(function() {
            return $(this).text();
         }).get();

         $('#image_id').val(data[1]);
      });

      $('.edit-package').on('click', function() {
         $('#edit-modal').modal('show');

         $tr = $(this).closest("tr");
         var data = $tr.children("td").map(function() {
            return $(this).text();
         }).get();

         $('#r_name').val(data[0]);
         $('#pid').val(data[1]);
         $('#tid').val(data[2]);
         $('#order_date').val(data[3]);
         $('#d_location').val(data[4]);
         $('#p_status').val(data[7]);
         $('#s_name').val(data[8]);
         $('#s_email').val(data[9]);
         $('#r_email').val(data[10]);
         $('#s_phone').val(data[11]);
         $('#r_phone').val(data[12]);
         $('#s_postcode').val(data[13]);
         $('#r_postcode').val(data[14]);
         $('#s_address').val(data[15]);
         $('#r_address').val(data[16]);
         $('#p_name').val(data[17]);
         $('#p_weight').val(data[18]);
         $('#ship_cost').val(data[19]);
         $('#h_charges').val(data[20]);
         $('#pay_status').val(data[21]);
         $('#p_type').val(data[22]);
         $('#p_pieces').val(data[23]);
         $('#o_location').val(data[25]);
         $('#arival_date').val(data[26]);
      });
   });
</script>