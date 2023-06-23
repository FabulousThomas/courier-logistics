<?php

global $conn;
// CHECK CONNECTION
if (!$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS)) {
   die('UNABLE TO COONECT');
}

// CREATE DATABASE AND TABLES
$createdb = $conn->query('CREATE DATABASE IF NOT EXISTS `maxcourier`');
if ($createdb) {

   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
   // CREATE TABLE
   $createProducts = $conn->query("CREATE TABLE IF NOT EXISTS products ( 
      `id` INT NOT NULL AUTO_INCREMENT,
      `p_id` VARCHAR(20) NOT NULL, 
      `t_id` VARCHAR(20) NOT NULL, 
      `r_name` VARCHAR(225) NOT NULL, 
      `r_email` VARCHAR(225) NOT NULL, 
      `r_phone` VARCHAR(225) NOT NULL,
      `r_postcode` INT NOT NULL,
      `r_address` VARCHAR(225) NOT NULL,
      `s_name` VARCHAR(225) NOT NULL,
      `s_email` VARCHAR(225) NOT NULL,
      `s_phone` VARCHAR(225) NOT NULL,
      `s_postcode` INT NOT NULL,
      `s_address` VARCHAR(225) NOT NULL,
      `p_name` VARCHAR(225) NOT NULL,
      `p_weight` INT NOT NULL, 
      `p_status` VARCHAR(225) NOT NULL, 
      `ship_cost` INT NOT NULL, 
      `h_charges` INT NOT NULL,
      `pay_status` VARCHAR(225) NOT NULL,
      `p_type` VARCHAR(225) NOT NULL,
      `p_pieces` VARCHAR(225) NOT NULL,
      `image` VARCHAR(500) NOT NULL, 
      `transit` VARCHAR(225) NOT NULL,
      `r_status` VARCHAR(225) NOT NULL,
      `auto_track` VARCHAR(225) NOT NULL, 
      `o_location` VARCHAR(225) NOT NULL, 
      `d_location` VARCHAR(225) NOT NULL, 
      `order_date` DATE NOT NULL, 
      `arival_date` VARCHAR(50) NOT NULL, 
      PRIMARY KEY (`id`)) ENGINE = InnoDB");

   if (!$createProducts) {
      die("<h3>ERROR CREATING TABLE 'PRODUCTS'==>> </h3>" . mysqli_error($conn));
   }

   // CREATE TABLE
   $createUsers = $conn->query("CREATE TABLE IF NOT EXISTS users ( 
      `id` INT NOT NULL AUTO_INCREMENT,
      `user_name` VARCHAR(225) NOT NULL, 
      `user_email` VARCHAR(225) NOT NULL, 
      `user_pass` VARCHAR(225) NOT NULL,
      PRIMARY KEY (`id`)) ENGINE = InnoDB");

   if (!$createUsers) {
      die("<h3>ERROR CREATING TABLE 'USERS'==>> </h3>" . mysqli_error($conn));
   }
}
