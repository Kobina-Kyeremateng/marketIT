<?php include('function.php') ?>
<html>
    <head>
        <?php @require_once 'config/commonJS.php'; ?>
    </head>
    <body>
        <!-- wrap starts here -->
        <div id="wrap">
            <!--header -->
            <?php //@require_once 'menu/header.php'; ?>
            <div id="header">
                <h1 id="logo-text"><a href=".">market IT</a></h1>
                <p id="slogan">Just say it, and the world knows...</p>
                <div id="header-links">
                </div>
            </div>
            <!-- navigation -->
            <?php //@require_once 'menu/menu.php'; ?>
            <!-- content-wrap starts here -->
            <div id="content-wrap">
                <div id="main">
					<form method="post" action="index.php">

										<?php echo display_error(); ?>

                  	<div class="row">
                  		<div class="col-sm-4">Email ID</div>
                  		<div class="col-sm-5">
                  		<input type="email" name="email" class="form-control"/></div>
                  	</div>

                  	<div class="row">
                  		<div class="col-sm-4">Password</div>
                  		<div class="col-sm-5">
                  		<input type="password" name="password" class="form-control"/></div>
                  	</div>
                  	<div class="row" style="margin-top:10px">
                  		<div class="col-sm-2"></div>
                  		<div class="col-sm-8">
                  		<input type="submit" value="Login" name="login_btn" class="btn btn-success"/>

                  		</div>
                  	</div>
                  </form>

                    <div class="clear"></div>
                </div>
            <?php @require_once 'menu/sidemenu.php'; ?>
            <!-- content-wrap ends here -->
            </div>
            <!--footer starts here-->
            <?php @require_once 'menu/footer.php'; ?>
            <!-- wrap ends here -->
        </div>
    </body>
</html>
