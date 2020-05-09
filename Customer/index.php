<?php
include('../Login/function.php');
include('../connection.php');


if (!isCustomer()) {
	$_SESSION['msg'] = "You must log in first";
	header('location:./Login');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:../Login");
}
?>

<?php include('pageloader.php'); ?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>AITI-KACE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/aiti.png">

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>


</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
    	<nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/aiti.png"alt="" /></a>
            <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
          <nav class="sidebar-nav left-sidebar-menu-pro">
            <ul class="metismenu" id="menu1">
<br>
<br>
			        <!-- <li>
			                <li><a href="?page=viewClassAc">View All Students<img src="assets/img/view2.png"></a></li>
			                <li><a href="?page=viewPaymentsAc">Payments<img src="assets/img/import.png"></a></li>
			                <li><a href="?page=">Expenditures<img src="assets/img/import.png"></a></li>
			                <li><a href="?page=addStudAc">Add a Student<img src="assets/img/new.png"> </a></li>

			                <!-- <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">My Class</span></a></li>
			                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Enter Marks</span></a></li>
			                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">View Marks</span></a></li>
			                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li>
											<li><a title="Students Profile"  href="?page=attendance"><span class="mini-sub-pro">Mark Attendace</span></a></li> -->
			        <!-- </li> --> -->
          </ul>
        </nav>
      </div>
    </nav>
  </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
  <div class="all-content-wrapper">
  	<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
          </div>
        </div>
    </div>
</div>
<div class="header-advance-area">
  <div class="header-top-area">
    <div class="container-fluid">
    	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="header-top-wraper">
            <div class="row">
              <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
              </div>
              <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                  <div class="header-top-menu tabl-d-n"></div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <div class="header-right-info">
                      <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item dropdown">
                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                          <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                            <div class="message-single-top">
                              <h1>Message</h1>
                            </div>
                              <ul class="message-menu">
                                <li>
                                <a href="#">
                                  <div class="message-img">
                                      <img src="img/contact/1.jpg" alt="">
                                  </div>
                                  <div class="message-content">
                                      <span class="message-date">16 Sept</span>
                                      <h2>Advanda Cro</h2>
                                      <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <div class="message-img">
                                          <img src="img/contact/4.jpg" alt="">
                                      </div>
                                      <div class="message-content">
                                          <span class="message-date">16 Sept</span>
                                          <h2>Sulaiman din</h2>
                                          <p>Please done this project as soon possible.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <div class="message-img">
                                          <img src="img/contact/3.jpg" alt="">
                                      </div>
                                      <div class="message-content">
                                          <span class="message-date">16 Sept</span>
                                          <h2>Victor Jara</h2>
                                          <p>Please done this project as soon possible.</p>
                                      </div>
                                  </a>
                              </li>
		                          <li>
		                              <a href="#">
		                                  <div class="message-img">
		                                      <img src="img/contact/2.jpg" alt="">
		                                  </div>
		                                  <div class="message-content">
		                                      <span class="message-date">16 Sept</span>
		                                      <h2>Victor Jara</h2>
		                                      <p>Please done this project as soon possible.</p>
		                                  </div>
		                              </a>
		                          </li>
                            </ul>
                          <div class="message-view">
                              <a href="#">View All Messages</a>
                          </div>
                        </div>
                      	</li>
                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                          <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                              <div class="notification-single-top">
                                  <h1>Notifications</h1>
                              </div>
                              <ul class="notification-menu">
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Advanda Cro</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Sulaiman din</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Victor Jara</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Victor Jara</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                              <div class="notification-view">
                                  <a href="#">View All Notification</a>
                              </div>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
														<?php
																$db = mysqli_connect('localhost', 'root', '', 'marketit');
																$username = $_SESSION['user']['Email'];
																$query = "SELECT * FROM login where Email = '{$username}'";
																$result = mysqli_query($db, $query);
																while($user = mysqli_fetch_assoc($result)){ 
                                  $Name = $user['FirstName'];
																	$image = $user['Image'];
																};
														?>
														<img src="img/product/pro4.jpg" alt="" />
														<span class="admin-name"><?php echo "$Name"?></span>
														<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
													</a>
                  <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                      <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a></li>
                      <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a></li>
                      <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a></li>
                      <li><a href="index.php?logout='1'" style="color: red;"><span class="edu-icon edu-locked author-log-ic"><span>Log Out</a>
                      </li>
                  </ul>
                      </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </div>
	</div>
</div>
</div>

						<?php include($url);?>

<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>

    <script>
      $(document).ready(function(){
        var feepayable = $('#feepayable').val() - 0;
        var amountPaid = $('#amountPaid');
        var currentArrears = $('#currentArears');

        function setCurrentArears(){
          currentArrears.val("");
          // currentArears.val("") = feepayable.val() - 0;
          if(isNaN(amountPaid.val()-0))return false;
          var amount = feepayable - (amountPaid.val() -0);
          currentArrears.val(amount);
        }

        amountPaid.on('keyup',function(){
          setCurrentArears();
        });
      })
    </script>

      <script>
        $(document).ready(function(){
            $('#productcategory').on('change',function(){
                var pcategory = $(this).val();
                if (pcategory) {
                    $.ajax({
                        url : "ajaxProductAdd.php",
                        type: "POST",
                        data: 'productcategory='+pcategory,
                        success: function (html) {
                            //alert(html);
                            console.log(html);
                            $('#producttype').html(html);
                        },
                    });
                }
                else{
                    $('#producttype').html('<option value="">Select Category First</option>')
                }
            });
            $('#producttype').on('change',function(){
                var ptype = $(this).val();
                if (ptype) {
                    $.ajax({
                        url : "ajaxProductAdd.php",
                        type: "POST",
                        data: 'producttype='+ptype,
                        success: function (html) {
                            //alert(html);
                            console.log(html);
                            $('#productbrand').html(html);
                        },
                    });
                }
                else{
                    $('#productbrand').html('<option value="">Select Type First</option>')
                }
            });
            $('#productbrand').on('change',function(){
                var pbrand = $(this).val();
                if (pbrand) {
                    $.ajax({
                        url : "ajaxProductAdd.php",
                        type: "POST",
                        data: 'productbrand='+pbrand,
                        success: function (html) {
                            //alert(html);
                            console.log(html);
                            $('#productversion').html(html);
                        },
                    });
                }
                else{
                    $('#productversion').html('<option value="">Select Type First</option>')
                }
            });
            $('#productversion').on('change',function(){
                var pversion = $(this).val();
                if (pversion) {
                    $.ajax({
                        url : "ajaxProductAdd.php",
                        type: "POST",
                        data: 'productversion='+pversion,
                        success: function (html) {
                            //alert(html);
                            console.log(html);
                            $('#productcolour').html(html);
                        },
                    });
                }
                else{
                    $('#productcolour').html('<option value="">Select Version First</option>')
                }
            });
        });
    </script>
</body>

</html>
