<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>AITI-KACE</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/aiti.PNG">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">

</head>

<body class="register----page">
    <div class="page-wrapper h-100vh">
        <!-- Wrapper -->
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-lg-8">
                    <!-- Middle Box -->
                    <div class="middle-box-- pd-100 mt-100 mb-100 bg-boxshadow text-center bg-white">
                        <h3>Register to AITI-KACE</h3>
                        <p>Create account to see it in action.</p>

                        <!-- Form Area -->
                      <form method="post" action="register.php">
                        <?php echo display_error(); ?>
                        <div class="form-area">
                            <!-- Form Group -->
                            <div class="form-group">
                                <h4>Username</h4>
                                <input type="text" class="form-control registar" name="username" required="" value="<?php echo $username; ?>">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <h4>E-Mail</h4>
                                <input type="email" class="form-control registar" name="email" required="" value="<?php echo $email; ?>">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <h4>Password</h4>
                                <input type="password" class="form-control registar" name="password_1" required="">
                            </div>
                            <div class="form-group">
                                <h4>Confirm Password</h4>
                                <input type="password" class="form-control registar" name="password_2" required="">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <label><input type="checkbox" /><span>Agree the terms and policy</span></label>
                            </div>
                            <button type="submit" class="btn waves-effect m-2 btn-outline-primary registar" name="register_btn">Register</button>
                            <p class="account-desc text-center">Already have an account?</p>
                            <a class="btn waves-effect m-2 btn-outline-primary registar" href="login.php">Login</a>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======== Must needed plugins to the run this template ======= -->
    <script src="assets/js/jquery/jquery.2.2.4.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins-js/menu-active.js"></script>
    <script src="js/plugins-js/plugins-js/materialize.js"></script>
    <script src="js/box-switch.js"></script>

    <script src="js/fullscreen.js"></script>
    <script src="js/nicescroll.min.js"></script>
    <script src="js/active.js"></script>
    <!-- this plugins only for demo purpose -->
    <script src="js/settings.js"></script>
    <!-- ======== /. Must needed plugins to the run this template ======= -->

    <!-- ======== Only needs these plugins for the run this page ======== -->
    <!-- ======== /. Only needs these plugins for the run this page ======== -->

</body>

</html>
