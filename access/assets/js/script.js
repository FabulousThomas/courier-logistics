$(document).ready(function () {
   $('.delete-package').on('click', function () {
      $('#delete-modal').modal('show');

      $tr = $(this).closest("tr");
      var data = $tr.children("td").map(function () {
         return $(this).text();
      }).get();

      $('#p_id').val(data[1]);
   });

   $('.generate_tracking_no').on('click', function () {
      $('#generate_tracking_no-modal').modal('show');

      $tr = $(this).closest("tr");
      var data = $tr.children("td").map(function () {
         return $(this).text();
      }).get();

      $('#pack_id').val(data[1]);
      $('#track_id').val(data[2]);
   });

   $('.update-image').on('click', function () {
      $('#update-image-modal').modal('show');

      $tr = $(this).closest("tr");
      var data = $tr.children("td").map(function () {
         return $(this).text();
      }).get();

      $('#image_id').val(data[1]);
   });

   $('.edit-package').on('click', function () {
      $('#edit-modal').modal('show');

      $tr = $(this).closest("tr");
      var data = $tr.children("td").map(function () {
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