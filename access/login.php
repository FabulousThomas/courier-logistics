<?php require './inc/head.php'; ?>
<?php
if (isset($_SESSION['isLoggedIn'])) {
    redirect('index.php');
}

if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ? AND user_pass = ? LIMIT 1");
    $stmt->bind_param('ss', $email, $password);

    if ($stmt->execute()) {
        $stmt->bind_result($user_id, $user_name, $user_email, $user_password);
        $stmt->store_result();

        if ($stmt->num_rows() == 1) {
            $stmt->fetch();

            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_email'] = $user_email;
            $_SESSION['isLoggedIn'] = true;
            flashMsg('message', 'Welcome ' . '-' . 'Admin' . '-');
            redirect('index.php');
        } else {
            flashMsg('error', 'Could not verify your account. Check your details', 'alert alert-danger');
        }
    } else {
        flashMsg('error', 'Something went wrong', 'alert alert-danger');
    }
}
?>

<!-- LOGIN -->
<section class="my-5 py-5">
    <div class="container col-lg-5 col-12 mx-auto">
        <h2 class=" text-center">Login</h2>
        <form action="login.php" method="POST" id="form" enctype="multipart/form-data">
            <p><?php flashMsg('error'); ?></p>

            <div class="form-group mb-2">
                <label for="email" class="m-0">Email</label>
                <input type="email" class="form-control" id="login-email" name="email" placeholder="Email" inputmode="email" required>
            </div>
            <div class="form-group mb-2">
                <label for="password" class="m-0">Password</label>
                <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" inputmode="password" required>
            </div>
            <div class="form-group mb-2">
                <input type="submit" class="btn btn-secondary w-100" id="btn" name="btn-login" value="Login">
            </div>
        </form>
    </div>
</section>

<!-- FOOTER -->
<?php require './inc/footer.php'; ?>