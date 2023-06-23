<!-- == ADD PACKAGE == -->
<div class="modal fade" id="add-product" tabindex="-1" role="dialog" data-bs-backdrop="static">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header py-2 bg-secondary">
            <h5 class="modal-title text-white text-capitalize">Add new Products</h5>
            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"><i class="las la-times la-2x" aria-hidden="true"></i></span>
            </a>
         </div>
         <p class="text-center text-uppercase mb-0 text-danger">Fill in the fields carefully. Remember to read through
            before submitting form.</p>
         <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
               <input type="hidden" value="">
               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Name</label>
                     <input type="text" name="s_name" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Name</label>
                     <input type="text" name="r_name" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Email</label>
                     <input type="email" name="s_email" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Email</label>
                     <input type="email" name="r_email" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Phone</label>
                     <input type="tel" name="s_phone" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Phone</label>
                     <input type="tel" name="r_phone" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Postal Code</label>
                     <input type="text" name="s_postcode" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Postal Code</label>
                     <input type="text" name="r_postcode" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Address</label>
                     <input type="text" name="s_address" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Address</label>
                     <input type="text" name="r_address" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Package Name</label>
                     <input type="text" name="p_name" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Package Weight(KG)</label>
                     <input type="text" name="p_weight" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Shipment Cost($)</label>
                     <input type="number" name="ship_cost" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Handling Charges</label>
                     <input type="number" name="h_charges" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Paid?</label>
                     <select class="form-select" name="pay_status" required>
                        <option selected disabled>Select option</option>
                        <!-- <option value="Yes">Yes</option> -->
                        <option value="No">No</option>
                        <option value="Paid In Full">Paid In Full</option>
                        <option value="Pay On Delivery">Pay On Delivery</option>
                     </select>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Choose Package</label>
                     <select class="form-select" name="p_type" required>
                        <option selected disabled>Choose Package</option>
                        <option value="Basic">Basic</option>
                        <option value="Pro">Pro</option>
                        <option value="Ultimate">Ultimate</option>
                     </select>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Package Status</label>
                     <select class="form-select" name="p_status" required>
                        <option selected disabled>Choose Package Status</option>
                        <option value="On Process">On Process</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Stopped">Stopped</option>
                        <option value="On Hold">On Hold</option>
                        <option value="Terminated">Terminated</option>
                     </select>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">No. of Pieces</label>
                     <select class="form-select" name="p_pieces" required>
                        <option selected disabled>Choose Pieces</option>
                        <option value="1 Truck Box">1 Truck Box</option>
                        <option value="2 Truck Box">2 Truck Box</option>
                        <option value="3 Truck Box">3 Truck Box</option>
                        <option value="4 Truck Box">4 Truck Box</option>
                        <option value="5 Truck Box">5 Truck Box</option>
                        <option value="6 Truck Box">6 Truck Box</option>
                     </select>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Order Date</label>
                     <input type="date" name="order_date" value="<?= date('Y-m-d'); ?>" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Arival Date <small class="text-danger">(select date)</small></label>
                     <input type="date" name="arival_date" value="<?= date('Y-m-d'); ?>" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Location(Origin)</label>
                     <input type="text" name="o_location" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Location(Destination)</label>
                     <input type="text" name="d_location" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2">
                  <label for="">Package Image</label>
                  <input type="file" name="image" accept="image/*" value="" class="form-control" required>
               </div>

               <div class="modal-footer py-2">
                  <button type="submit" class="btn btn-secondary px-5 py-2 btn-sm" name="btn-add-product"><i
                        class="las la-plus"></i> Add</button>
               </div>
               <p class="text-danger text-center text-uppercase mb-0">Add traveling routes after package registration
               </p>
               <p class="text-danger text-center text-uppercase">Note that form will not be submitted without uploading
                  image</p>
            </form>

         </div>
      </div>
   </div>
</div>

<!-- EDIT PACKAGES -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" data-bs-backdrop="static">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header py-2 bg-secondary">
            <h5 class="modal-title text-white text-capitalize">Edit Package</h5>
            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"><i class="las la-times la-2x" aria-hidden="true"></i></span>
            </a>
         </div>

         <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
               <input type="hidden" name="p_id" id="pid" class="border-0" value="">
               <input type="hidden" name="t_id" id="tid" class="border-0" value="">
               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Name</label>
                     <input type="text" name="s_name" id="s_name" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Name</label>
                     <input type="text" name="r_name" id="r_name" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Email</label>
                     <input type="email" name="s_email" id="s_email" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Email</label>
                     <input type="email" name="r_email" id="r_email" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Phone</label>
                     <input type="tel" name="s_phone" id="s_phone" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Phone</label>
                     <input type="tel" name="r_phone" id="r_phone" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Postal Code</label>
                     <input type="text" name="s_postcode" id="s_postcode" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Postal Code</label>
                     <input type="text" name="r_postcode" id="r_postcode" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Address</label>
                     <input type="text" name="s_address" id="s_address" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Receiver Address</label>
                     <input type="text" name="r_address" id="r_address" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Package Name</label>
                     <input type="text" name="p_name" id="p_name" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Package Weight(KG)</label>
                     <input type="text" name="p_weight" id="p_weight" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Shipment Cost($)</label>
                     <input type="number" name="ship_cost" id="ship_cost" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Handling Charges</label>
                     <input type="number" name="h_charges" id="h_charges" value="" class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Sender Paid?</label>
                     <select class="form-select" name="pay_status" id="pay_status" required>
                        <option selected disabled>Select option</option>
                        <!-- <option value="Yes">Yes</option> -->
                        <option value="No">No</option>
                        <option value="Paid In Full">Paid In Full</option>
                        <option value="Pay On Delivery">Pay On Delivery</option>
                     </select>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Choose Package</label>
                     <select class="form-select" name="p_type" id="p_type" required>
                        <option selected disabled>Choose Package</option>
                        <option value="Basic">Basic</option>
                        <option value="Pro">Pro</option>
                        <option value="Ultimate">Ultimate</option>
                     </select>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Package Status</label>
                     <select class="form-select" name="p_status" id="p_status" required>
                        <option selected disabled>Choose Package Status</option>
                        <option value="On Process">On Process</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Stopped">Stopped</option>
                        <option value="On Hold">On Hold</option>
                        <option value="Terminated">Terminated</option>
                     </select>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">No. of Pieces</label>
                     <select class="form-select" name="p_pieces" id="p_pieces" required>
                        <option selected disabled>Choose Pieces</option>
                        <option value="1 Truck Box">1 Truck Box</option>
                        <option value="2 Truck Box">2 Truck Box</option>
                        <option value="3 Truck Box">3 Truck Box</option>
                        <option value="4 Truck Box">4 Truck Box</option>
                        <option value="5 Truck Box">5 Truck Box</option>
                        <option value="6 Truck Box">6 Truck Box</option>
                     </select>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Order Date</label>
                     <input type="date" name="order_date" id="order_date" value="<?= date('Y-m-d'); ?>"
                        class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Arival Date <small class="text-danger">(select date)</small></label>
                     <input type="date" name="arival_date" id="arival_date" value="<?= date('Y-m-d'); ?>"
                        class="form-control" required>
                  </div>
               </div>

               <div class="form-group mb-0 mb-lg-2 row">
                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Location(Origin)</label>
                     <input type="text" name="o_location" id="o_location" value="" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3 mb-lg-0">
                     <label for="">Location(Destination)</label>
                     <input type="text" name="d_location" id="d_location" value="" class="form-control" required>
                  </div>
               </div>

               <!-- <div class="form-group mb-0 mb-lg-2">
                  <label for="">Package Image</label>
                  <input type="file" name="image" id="image" accept="image/*" value="" class="form-control" required>
               </div> -->

               <div class="modal-footer py-2">
                  <button type="submit" class="btn btn-secondary px-5 py-2 btn-sm" name="btn-update-product"><i
                        class="las la-plus"></i> Update</button>
               </div>

            </form>

         </div>
      </div>
   </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header py-2 bg-secondary">
            <h5 class="modal-title text-white text-capitalize">Delete Option</h5>
            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"><i class="las la-times la-2x" aria-hidden="true"></i></span>
            </a>
         </div>
         <div class="modal-body">
            <p class="m-0">Note: <span class="text-danger">This action can not be reversed once it is done.</span> </p>
            Do you confirm to delete this package?
            <form method="POST">
               <input type="hidden" name="p_id" id="p_id" class="form-control" value="">
               <div class="modal-footer mt-4">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <button type="submit" name="delete-package" class="btn btn-danger">Yes</button>
               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- Generate New Tracking ID Modal -->
<div class="modal fade" id="generate_tracking_no-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header py-2 bg-secondary">
            <h5 class="modal-title text-white text-capitalize">new tracking number</h5>
            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"><i class="las la-times la-2x" aria-hidden="true"></i></span>
            </a>
         </div>
         <div class="modal-body">
            <p class="m-0">Note: <span class="text-danger">This action can not be reversed once it is done.</span> </p>
            Do you confirm to generate new tracking number?
            <form method="POST">
               <input type="hidden" name="pack_id" id="pack_id" class="form-control" value="">
               <div class="modal-footer mt-4">

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <button type="submit" name="btn_generate_tracking_no" class="btn btn-danger">Yes</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Update Image Modal -->
<div class="modal fade" id="update-image-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header py-2 bg-secondary">
            <h5 class="modal-title text-white text-capitalize">Change Image</h5>
            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"><i class="las la-times la-2x" aria-hidden="true"></i></span>
            </a>
         </div>
         <div class="modal-body">
            <p class="m-0">Note: <span class="text-danger">This action can not be reversed once it is done.</span> </p>
            Do you confirm to change package image?
            <form method="POST" class="mt-3" enctype="multipart/form-data">
               <input type="hidden" name="image_id" id="image_id" class="form-control" value="">
               <label for="image">Change Imgae</label>
               <input type="file" name="image" id="image" accept="image/*" class="form-control" value="">
               <div class="modal-footer mt-4">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <button type="submit" name="btn-change-image" class="btn btn-danger">Yes</button>
               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- Change Password Modal -->
<div class="modal fade" id="change-password-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header py-2 bg-secondary">
            <h5 class="modal-title text-white text-capitalize">Change Password</h5>
            <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"><i class="las la-times la-2x" aria-hidden="true"></i></span>
            </a>
         </div>
         <div class="modal-body">

            <form action="index.php" method="POST" id="form">

               <div class="form-group mb-2">
                  <label for="password" class="m-0">Password</label>
                  <input type="password" id="account-password" class="form-control" name="password"
                     placeholder="Password" required>
               </div>
               <div class="form-group mb-2">
                  <label for="cpassword" class="m-0">Confirm Password</label>
                  <input type="password" id="account-cpassword" class="form-control" name="cpassword"
                     placeholder="Confirm Password" required>
               </div>
               <div class="form-group">
                  <input type="submit" id="btn" class="btn btn-secondary w-100" name="btn-change-password"
                     value="Change">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>