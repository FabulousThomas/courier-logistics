<?php
if (!isset($_SESSION['isLoggedIn'])) {
  redirect('login.php');
}
?>

<!-- NAV START -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-0 py-3 fixed-to shadow black-bg">
   <div class="container text-dark">
     <a href="./">
       <img src="./assets/img/logo/logo.png" width="100px" alt="LOGO">
     </a>
     <button class="navbar-toggler d-lg-none d-inline theme-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon theme-color"></span>
     </button>
     <div class="collapse navbar-collapse" id="collapsibleNavId">
       <!-- <div class="m-auto"></div> -->
       <ul class="navbar-nav ms-">
         <li class="nav-item">
           <a class="nav-link" href="./">Home</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link" href="./">Manage Package</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#add-product">Add Package</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="./routes.php">Manage Routes</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="./view.php">Print Receipt</a>
         </li>
         <!-- <li class="nav-item">
           <a class="nav-link" href="./settings.php">Website Settings</a>
         </li> -->
         <li class="nav-item">
           <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#change-password-modal">Change Password</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="?logout=1" style="color: red !important;">Logout</a>
         </li>

       </ul>
     </div>
   </div>
 </nav>
 <!-- NAV END -->