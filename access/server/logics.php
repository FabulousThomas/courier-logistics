<?php
// === SELECT ALL FROM TABLE
function selectAll($table)
{
   global $conn;
   return $conn->query("SELECT * FROM $table ORDER BY id DESC");
}
// === SELECT ALL FROM TABLE WHERE
function selectAllWhere($table, $table_col, $search_param)
{
   global $conn;
   return $conn->query("SELECT * FROM $table WHERE $table_col = '$search_param'");
}
// === DELETE FORM TABLE
function deletePackage($table, $table_col, $search_param)
{
   global $conn;
   return $conn->query("DELETE FROM $table WHERE $table_col = '$search_param' LIMIT 1");
}

// === FORM REQUEST
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
   if (isset($_POST['btn-add-product'])) {
      $rand_pid = random_num(10000000, 99999999);
      $rand_tid = random_num(15, 9000000000);
      $p_id = $rand_pid;
      $t_id =  $rand_tid;
      $transit = 'Not set yet';
      $r_status = 'Not set yet';
      $auto_track = 'No';
      $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
      $r_name = mysqli_real_escape_string($conn, $_POST['r_name']);
      $s_email = mysqli_real_escape_string($conn, $_POST['s_email']);
      $r_email = mysqli_real_escape_string($conn, $_POST['r_email']);
      $s_phone = mysqli_real_escape_string($conn, $_POST['s_phone']);
      $r_phone = mysqli_real_escape_string($conn, $_POST['r_phone']);
      $s_postcode = mysqli_real_escape_string($conn, $_POST['s_postcode']);
      $r_postcode = mysqli_real_escape_string($conn, $_POST['r_postcode']);
      $s_address = mysqli_real_escape_string($conn, $_POST['s_address']);
      $r_address = mysqli_real_escape_string($conn, $_POST['r_address']);
      $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
      $p_weight = mysqli_real_escape_string($conn, $_POST['p_weight']);
      $ship_cost = mysqli_real_escape_string($conn, $_POST['ship_cost']);
      $h_charges = mysqli_real_escape_string($conn, $_POST['h_charges']);
      $pay_status = mysqli_real_escape_string($conn, $_POST['pay_status']);
      $p_type = mysqli_real_escape_string($conn, $_POST['p_type']);
      $p_status = mysqli_real_escape_string($conn, $_POST['p_status']);
      $p_pieces = mysqli_real_escape_string($conn, $_POST['p_pieces']);
      $order_date = mysqli_real_escape_string($conn, $_POST['order_date']);
      $arival_date = mysqli_real_escape_string($conn, $_POST['arival_date']);
      $o_location = mysqli_real_escape_string($conn, $_POST['o_location']);
      $d_location = mysqli_real_escape_string($conn, $_POST['d_location']);
      $image =  $_FILES['image'];

      // GET IMAGE PATH EXTENSION AND NAME
      $rand_number1 = random_num(1000000000, 9999999999);
      $image1 = $_FILES['image']['name'];
      $image_ext1 = pathinfo($image1, PATHINFO_EXTENSION);
      $image_name1 = $rand_number1 . '.' . $image_ext1;
      $image_path = '../uploads/';

      $stmt = $conn->prepare("INSERT INTO products (p_id, t_id, r_name, r_email, r_phone, r_postcode, r_address, s_name, s_email, s_phone, s_postcode, s_address, p_name, p_weight, p_status, ship_cost, h_charges, pay_status, p_type, p_pieces, image, transit, r_status, auto_track, o_location, d_location, order_date, arival_date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("sssssissssissisiisssssssssss", $rand_pid, $rand_tid, $r_name, $r_email, $r_phone, $r_postcode, $r_address, $s_name, $s_email, $s_phone, $s_postcode, $s_address, $p_name, $p_weight, $p_status, $ship_cost, $h_charges, $pay_status, $p_type, $p_pieces, $image_name1, $transit, $r_status, $auto_track, $o_location, $d_location, $order_date, $arival_date);

      if ($stmt->execute()) {
         //  Save uploaded images to img folder
         move_uploaded_file($_FILES['image']['tmp_name'], $image_path . $image_name1);
         flashMsg('message', 'Package added successfully!');
         redirect('index.php');
      } else {
         echo "Something went wrong";
      }
   }
   if (isset($_POST['delete-package'])) {
      $p_id = mysqli_real_escape_string($conn, $_POST['p_id']);
      $sql = selectAllWhere('products', 'p_id', $p_id);
      $row = mysqli_fetch_array($sql);
      $image = $row['image'];

      $stmt = deletePackage('products', 'p_id', $p_id);
      if (!$stmt) {
         echo "Something went wrong";
      } else {
         if (file_exists("../uploads/" . $image)) {
            unlink("../uploads/" . $image);
         }
         flashMsg("message", "Package deleted");
         redirect("index.php");
      }
   }
   if (isset($_POST['btn-update-product'])) {
      // $rand_pid = random_num(10000000, 99999999);
      // $rand_tid = random_num(1000000000, 9999999999);
      // $t_id =  $rand_tid;
      // $transit = 'not set yet';
      // $auto_track = 'No'; generate_tracking_no
      $p_id = mysqli_real_escape_string($conn, $_POST['p_id']);
      $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
      $r_name = mysqli_real_escape_string($conn, $_POST['r_name']);
      $s_email = mysqli_real_escape_string($conn, $_POST['s_email']);
      $r_email = mysqli_real_escape_string($conn, $_POST['r_email']);
      $s_phone = mysqli_real_escape_string($conn, $_POST['s_phone']);
      $r_phone = mysqli_real_escape_string($conn, $_POST['r_phone']);
      $s_postcode = mysqli_real_escape_string($conn, $_POST['s_postcode']);
      $r_postcode = mysqli_real_escape_string($conn, $_POST['r_postcode']);
      $s_address = mysqli_real_escape_string($conn, $_POST['s_address']);
      $r_address = mysqli_real_escape_string($conn, $_POST['r_address']);
      $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
      $p_weight = mysqli_real_escape_string($conn, $_POST['p_weight']);
      $ship_cost = mysqli_real_escape_string($conn, $_POST['ship_cost']);
      $h_charges = mysqli_real_escape_string($conn, $_POST['h_charges']);
      $pay_status = mysqli_real_escape_string($conn, $_POST['pay_status']);
      $p_type = mysqli_real_escape_string($conn, $_POST['p_type']);
      $p_status = mysqli_real_escape_string($conn, $_POST['p_status']);
      $p_pieces = mysqli_real_escape_string($conn, $_POST['p_pieces']);
      $order_date = mysqli_real_escape_string($conn, $_POST['order_date']);
      $arival_date = mysqli_real_escape_string($conn, $_POST['arival_date']);
      $o_location = mysqli_real_escape_string($conn, $_POST['o_location']);
      $d_location = mysqli_real_escape_string($conn, $_POST['d_location']);

      $stmt = $conn->prepare("UPDATE products SET r_name=?, r_email=?, r_phone=?, r_postcode=?, r_address=?, s_name=?, s_email=?, s_phone=?, s_postcode=?, s_address=?, p_name=?, p_weight=?, p_status=?, ship_cost=?, h_charges=?, pay_status=?, p_type=?, p_pieces=?, o_location=?, d_location=?, order_date=?, arival_date=? WHERE p_id=?");
      $stmt->bind_param("sssssssssssssssssssssss", $r_name, $r_email, $r_phone, $r_postcode, $r_address, $s_name, $s_email, $s_phone, $s_postcode, $s_address, $p_name, $p_weight, $p_status, $ship_cost, $h_charges, $pay_status, $p_type, $p_pieces, $o_location, $d_location, $order_date, $arival_date, $p_id);

      if (!$stmt->execute()) {
         echo "Something went wrong";
      } else {
         flashMsg("message", "Package updated");
         redirect("index.php");
      }
   }
   if (isset($_POST['btn_generate_tracking_no'])) {
      global $conn;
      $pack_id = mysqli_real_escape_string($conn, $_POST['pack_id']);

      $rand_number3 = rand(1000000000, 9999999999);

      $stmt = $conn->prepare("UPDATE products SET t_id=? WHERE p_id=? LIMIT 1");
      $stmt->bind_param("si",  $rand_number3, $pack_id);

      if ($stmt->execute()) {
         redirect("index.php");
         flashMsg("message", "New Tracking number generated successfully");
      } else {
         die("Something went wrong");
      }
   }
   if (isset($_POST['btn-change-image'])) {

      global $conn;
      $image_id = mysqli_real_escape_string($conn, $_POST['image_id']);

      // GET IMAGE PATH EXTENSION AND NAME
      $rand_number2 = random_num(1000000000, 9999999999);

      $image2 = $_FILES['image']['name'];
      $image_ext2 = pathinfo($image2, PATHINFO_EXTENSION);
      $image_name2 = $rand_number2 . '.' . $image_ext2;

      $image_path = '../uploads/';

      $sql = selectAllWhere('products', 'p_id', $image_id);
      $row = mysqli_fetch_array($sql);
      $getImage = $row['image'];

      $stmt = $conn->prepare("UPDATE products SET image=? WHERE p_id=?");
      $stmt->bind_param("ss",  $image_name2, $image_id);

      if ($stmt->execute()) {
         //  Save uploaded images to img folder
         move_uploaded_file($_FILES['image']['tmp_name'], $image_path . $image_name2);
         flashMsg("message", "Image updated");
         redirect("index.php");
         if (file_exists($image_path . $getImage)) {
            unlink($image_path . $getImage);
         }
      } else {
         echo "Something went wrong";
      }
   }
}
