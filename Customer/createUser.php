<?php
include('functions.php');
include('pageloader.php');
 ?>

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
                        <form method="post" action="createUser.php">
                          <?php echo display_error(); ?>
                            <div class="input-group">
                              <label>Username</label>
                              <input type="text" name="username" value="<?php echo $username; ?>">
                            </div>
                            <br>
                            <br>
                            <div class="input-group">
                              <label>Email</label>
                              <input type="email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <br>
                            <br>
                            <div class="input-group">
                              <label>User type</label>
                              <select name="user_type" id="user_type" >
                                    <option value=""></option>
                                    <option value="admin">Admin</option>
                                    <option value="staff">Lecturer</option>
                                    <option value="accountant">Accountant</option>
                              </select>
                            </div>
                            <br>
                            <br>
                            <div class="input-group">
                              <label>Password</label>
                              <input type="password" name="password_1">
                            </div>
                            <br>
                            <br>
                            <div class="input-group">
                              <button type="submit" class="btn" name="register_btn"> + Create A User</button>
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
