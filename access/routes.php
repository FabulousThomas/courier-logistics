<?php
require './inc/head.php';
require './inc/navbar.php';
$i = 1;

$getRoutes = selectAll('products');
$row = mysqli_fetch_assoc($getRoutes);
?>

<main class="py-5">

   <div class="container">
      <h2 class="text-center mb-0">Manage Routes</h2>
      <p class="text-center">Route gives you the privilege to manage locations of transit of this product.</p>
      <div class="col-lg-8 col-md-12 mx-auto">
         <p>Choose product to manage routes</p>
         <form action="add-routes.php?p_id=<?= $row['p_id'] ?>" method="GET">
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
               <button type="submit" class="btn btn-secondary">Proceed to edit</button>
            </div>
         </form>
      </div>
   </div>

</main>

<?php require './inc/footer.php'; ?>