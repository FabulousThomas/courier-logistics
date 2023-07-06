<?php
require './inc/head.php';
require './inc/navbar.php';

if (isset($_POST['track-package'])) {
   $tracking_no = mysqli_real_escape_string($conn, $_POST['tracking_no']);
   $trackResult = selectAllWhere('products', 't_id', $tracking_no);
   $row = mysqli_fetch_array($trackResult);

}
?>

<main class="mt-0 py-5">

   <?php if (isset($row)) { ?>
      <?php if ($row['t_id'] == $tracking_no) { ?>
         <section class="mt-5 py-5" id="">
            <div class="container">
               <?php if (isset($row['p_status'])) {
                  if ($row['p_status'] == 'On Process') {
                     echo "<h3 class='text-center mb-0'>Your Package Has Been Dispatched and It's On Transit</h3>";
                  } elseif ($row['p_status'] == 'On Hold') {
                     echo "<h3 class='text-center mb-0'>Your Package Has Been Placed On Hold</h3>";
                  } elseif ($row['p_status'] == 'Delivered') {
                     echo "<h3 class='text-center mb-0'>Your Package Has Been Delivered Successfully</h3>";
                  } elseif ($row['p_status'] == 'Stopped') {
                     echo "<h3 class='text-center mb-0'>Your Package Has Been Stopped</h3>";
                  } elseif ($row['p_status'] == 'Terminated') {
                     echo "<h3 class='text-center mb-0'>Your Package Has Been Terminated</h3>";
                  }
               } ?>
               <p class="text-center mb-0">See Your Package Information Below.</p>
               <div class="row mt-3">

                  <div class="col-lg-10 col-md-12 mb-4 mx-auto" data-aos="flip-right">
                     <div class="card py-">
                        <div class="card-body">
                           <div class="d-lg-flex flex-lg-row row  justify-content-between">
                              <div class="col-md-6 border-bottom pb-2">
                                 <small class="d-block">Package ID: <span class="fw-bold">
                                       <?= $row['p_id'] ?>
                                    </span></small>
                                 <small class="d-block">Tracking Number: <span class="fw-bold">
                                       <?= $row['t_id'] ?>
                                    </span></small>
                                 <small class="d-block">Handled by: <span class="fw-bold">
                                       <?= SITENAME ?>
                                    </span></small>
                              </div>

                              <div class="col-md-6 border-bottom pb-2">
                                 <small class="d-block">Package Status: <span class="fw-bold">
                                       <?= $row['p_status'] ?>
                                    </span></small>
                                 <small class="d-block">Order Date: <span class="fw-bold">
                                       <?= $row['order_date'] ?>
                                    </span></small>
                                 <small class="d-block">Arival Date: <span class="fw-bold">
                                       <?= $row['arival_date'] ?>
                                    </span>
                                    <?php if (isset($row['p_status'])): ?>
                                       <?php if ($row['p_status'] != 'Delivered'): ?>
                                          <sup class="text-danger">(subject to change)</sup>
                                       <?php endif; ?>
                                    <?php endif; ?>
                                 </small>
                              </div>
                           </div>

                           <div class="d-lg-flex flex-lg-row row  justify-content-between">
                              <div class="col-md-6 border-bottom py-2">
                                 <small class="d-block">Receiver Name: <span class="fw-bold">
                                       <?= $row['r_name'] ?>
                                    </span></small>
                                 <small class="d-block">Receiver Phone: <span class="fw-bold">
                                       <?= $row['r_phone'] ?>
                                    </span></small>
                                 <small class="d-block">Receiver Address: <span class="fw-bold">
                                       <?= $row['r_address'] ?>
                                    </span></small>
                              </div>

                              <div class="col-md-6 border-bottom py-2">
                                 <small class="d-block">Sender Name: <span class="fw-bold">
                                       <?= $row['s_name'] ?>
                                    </span></small>
                                 <small class="d-block">Sender Phone: <span class="fw-bold">
                                       <?= $row['s_phone'] ?>
                                    </span></small>
                                 <small class="d-block">Sender Address: <span class="fw-bold">
                                       <?= $row['s_address'] ?>
                                    </span></small>
                              </div>
                           </div>

                           <div class="d-lg-flex flex-lg-row row  justify-content-between">
                              <div class="col-md-6 pt-2">
                                 <small class="d-block">Package: <span class="fw-bold">
                                       <?= $row['p_name'] ?>
                                    </span></small>
                                 <small class="d-block">Package Weight(KG): <span class="fw-bold">
                                       <?= $row['p_weight'] ?>
                                    </span></small>
                                 <small class="d-block">Shipment Cost: <span class="fw-bold">$
                                       <?= number_format($row['ship_cost'], 2) ?>
                                    </span></small>
                              </div>

                              <div class="col-md-6 pt-2">
                                 <small class="d-block">Handling Charges: <span class="fw-bold">$
                                       <?= number_format($row['h_charges'], 2) ?>
                                    </span></small>
                                 <small class="d-block">Location(Origin): <span class="fw-bold">
                                       <?= $row['o_location'] ?>
                                    </span></small>
                                 <small class="d-block">Location(Destination): <span class="fw-bold">
                                       <?= $row['d_location'] ?>
                                    </span></small>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <h3 class="text-center">Transportation Routes</h3>
                  <div class="col-lg-10 col-md-12 mx-auto">
                     <div class="card">
                        <div class="card-body">
                           <?php if (isset($row['transit'])): ?>
                              <?php if ($row['transit'] == 'Not set yet' || $row['r_status'] == 'Not set yet'): ?>
                                 <p class="text-capitalize text-center mb-0">Not available</p>
                              <?php elseif ($row['transit'] != 'Not set yet' && $row['r_status'] == 'Currently here'): ?>
                                 <p class="text-center mb-0">Your Package:
                                    <?= $row['transit'] ?><span class="fst-italic">(
                                       <?= $row['r_status'] ?>)
                                    </span> <span class="blink bg-success ms-1"></span>
                                 </p>
                              <?php elseif ($row['transit'] != 'Not set yet' && $row['r_status'] == 'Passed here'): ?>
                                 <p class="text-center mb-0">Your Package:
                                    <?= $row['transit'] ?><span class="fst-italic">(
                                       <?= $row['r_status'] ?>)
                                    </span> <span class="blink bg-warning ms-1"></span>
                                 </p>
                              <?php elseif ($row['transit'] != 'Not set yet' && $row['r_status'] == 'On Transit'): ?>
                                 <p class="text-center mb-0">Your Package:
                                    <?= $row['transit'] ?> <span class="fst-italic">(
                                       <?= $row['r_status'] ?>)
                                    </span> <span class="blink bg-danger ms-1"></span>
                                 </p>
                              <?php endif; ?>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>


            </div>
         </section>
      <?php }
   } else { ?>
      <section class="mt-5 py-5" id="">
         <div class="container text-center">
            <h2 class="text-capitalize">Enter Tracking Number Again</h2>
            <div class="col-lg-8 col-md-12 mx-auto">
               <form action="./track-package.php" method="POST">
                  <div class="form-group mb-3">
                     <input type="text" class="form-control-lg w-100 text-uppercase text-center" name="tracking_no"
                        id="tracking_no" placeholder="Enter tracking number">
                  </div>
                  <div class="form-group mb-3">
                     <input type="submit" class="btn btn-warning text-white text-uppercase" name="track-package"
                        value="Track Your Package">
                  </div>
               </form>
            </div>
         </div>
      </section>
   <?php } ?>


</main>

<?php require './inc/footer.php' ?>