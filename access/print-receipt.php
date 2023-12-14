<?php
require './inc/head.php';
require './inc/navbar.php';
require './inc/sidebar.php';
$i = 1;

$getRoutes = selectAll('products');
$row = mysqli_fetch_assoc($getRoutes);
?>

<main class="py-5">

   <div class="container">
      <h2 class="text-center mb-0">Generate Receipt</h2>
      <div class="col-lg-8 col-md-12 mx-auto">
         <p>Choose package to generate receipt</p>
         <form action="receipt.php" method="POST">
            <div class="form-group mb-3">
               <select class="form-select form-control" name="p_id">
                  <!-- <option selected disabled>Select Route To Manage</option> -->
                  <?php if (mysqli_num_rows($getRoutes) > 0) : ?>
                     <?php foreach ($getRoutes as $row) : ?>
                        <option value="<?= $row['p_id'] ?>"><?= $i++ . '. ' . $row['r_name'] ?></option>
                     <?php endforeach; ?>
                  <?php else : ?>
                     <option disabled>No data found</option>
                  <?php endif; ?>
               </select>
            </div>
            <div class="form-group mb-3">
               <button type="submit" name="btn-get-receipt" class="btn btn-secondary">Proceed to Print</button>
            </div>
         </form>
      </div>
   </div>

</main>

<?php require './inc/footer.php'; ?>