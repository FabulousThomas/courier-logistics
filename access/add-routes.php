<?php
require './inc/head.php';
require './inc/navbar.php';

if (isset($_GET['p_id'])) {
   $p_id = $_GET['p_id'];

   $sql = selectAllWhere('products', 'p_id', $p_id);
   $row = mysqli_fetch_assoc($sql);

   if ($row['p_id'] != $p_id || $p_id == '') {
      redirect('routes.php');
   }

   if (isset($_POST['add_routing'])) {
      $route_country = mysqli_real_escape_string($conn, $_POST['route_country']);
      $route_status = mysqli_real_escape_string($conn, $_POST['route_status']);

      $stmt = $conn->prepare("UPDATE products SET transit=?, r_status=? WHERE p_id=?");
      $stmt->bind_param("sss",  $route_country, $route_status, $p_id);

      if (!$stmt->execute()) {
         echo "Something went wrong";
      } else {
         flashMsg("message", "Package Route updated successfully");
         redirect("index.php");
      }
   }
} else {
   redirect('routes.php');
}
?>

<main class="mt-0 py-5">
   <section class="">
      <div class="container">
         <h3 class='text-center mb-0 text-capitalize'>Change package routing information</h3>
         <p class='text-center mb-0'>Add and Select where appropriate</p>
         <div class="row mt-3">

            <div class="col-lg-10 col-md-12 mb-4 mx-auto">
               <div class="card py-">
                  <div class="card-body">
                     <form action="" method="POST">
                        <div class="row">
                           <div class="col-md-12 col-lg-6 mb-2">
                              <label for="country">Enter Routing Country</label>
                              <input type="text" class="form-control" name="route_country" required>
                           </div>
                           <div class="col-md-12 col-lg-6 mb-2">
                              <label for="country">Routing Status</label>
                              <select class="form-select" name="route_status">
                                 <option value="Not set yet">Not set yet</option>
                                 <option value="Currently here">Currently here</option>
                                 <option value="Passed here">Passed here</option>
                                 <option value="On Transit">On Transit</option>
                              </select>
                           </div>
                           <div class="col-md-12 col-lg-6 mt-2">
                              <button type="submit" class="btn btn-secondary" name="add_routing">Add Routing</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>


</main>


<?php
require './inc/footer.php';
?>