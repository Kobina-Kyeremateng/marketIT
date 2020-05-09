<?php include('functions.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>AITI-KACE Login Page</title>

    <!-- Favicon -->
<link rel="icon" href="img/core-img/aiti.PNG">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Login -->
    <div class="wrapper wrapper-content--- overflow-hidden">
        <!-- Bubble Container -->
        <canvas class="bubble-particlas"></canvas>
        <div class="container-login">
            <!-- Card Area -->
            <div class="card-area--  bg-primary">
                <h1 class="title">Login</h1>
                <form method="post" action="login.php">
                    <div class="input-container">
                        <input type="text" id="username" name="username" required="required" />
                        <label for="req">Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="password" name="password" required="required" />
                        <label for="pass">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="login_btn"><span>Login</span></button>
                    </div>
                    <div class="footer"><a class="text-white" href="register.php">Create an account</a></div>
                </form>
            </div>

            <!-- Card Area -->
            <!-- <div class="card-area-- alt bg-primary">
                <div class="toggle"></div>
                <div class="title">Register
                    <div class="close"></div>
                </div>
                <form>
                    <div class="input-container">
                        <input type="text" id="require" required="required" />
                        <label for="require">Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="requi" required="required" />
                        <label for="requi">E-mail</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="passw" name="password" required="required" />
                        <label for="passw">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button><span>Register</span></button>
                    </div> -->
                </form>
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

    <script src="js/plugins-js/plugins-js/particlas-bubble.js"></script>
    <script>
        $('.toggle').on('click', function() {
            $('.container-login').stop().addClass('active');
        });

        $('.close').on('click', function() {
            $('.container-login').stop().removeClass('active');
        });
    </script>

</body>

</html>
