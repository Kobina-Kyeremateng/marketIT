<?php
include('../Login/function.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location:../Login');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location:../Login");
}
?>

<?php include('pageloader.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>market-IT</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/marketIT-icon.jpg">

    <!-- ====== Only needs these css for the run this page ====== -->
    <link href="assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/plugins/morris-css/morris.css">
    <!-- ====== /. Only needs these css for the run this page ====== -->
    <link rel="stylesheet" href="assets/assets/css/bootstrap.min.css">
    <link href="assets/assets/css/loader.css" rel="stylesheet" />
    <script src="assets/assets/js/canvasjs.min.js"></script>
    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ======================================
    *************** Preloader *****************
    ======================================= -->
    <div class="matmin-preloader">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-green-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ******* Main Wrapper Area Start **********
    ======================================= -->
    <div class="main-wrapper" id="mainWrapper">

        <!-- ====== Header Area Start ====== -->
        <header class="matmin-header-area d-flex align-items-center justify-content-between">

            <!-- Single Header Content -->
            <div class="single-header-content d-flex align-items-center">

                <!-- Logo & Trigger Area -->
                <div>
                    <!-- Logo Area -->
                    <div class="logo-area">
                        <a href="?page=index"><img src="img/core-img/marketIT.jpg" alt=""></a>
                    </div>

                </div>
                <p>
                    <p>
                        <p>
                            <!-- Full Screen Mode -->
                            <div class="full-screen-mode mr-30">
                                <a href="javascript:" id="fullScreenMode"><i class="zmdi zmdi-fullscreen"></i></a>
                            </div>

                            <!-- Left Side Nav -->
                            <ul class="top-left-side-nav d-flex align-items-center">
                                <li class="nav-item dropdown">
                                    <!-- Dropdown -->
                                    <div class="dropdown mr-30">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <!-- Dropdown Menu -->
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another Action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something Else Here</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</button>
                                        <!-- Dropdown Menu -->
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another Action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something Else Here</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
            </div>

            <!-- Single Header Content -->
            <div class="single-header-content mr-15">
                <div class="user-meta-data d-flex align-items-center">
                    <!-- Top Bar Nav -->
                    <ul class="top-bar-nav d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-search"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Search Bar -->
                                <div class="top-search-bar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="top-search mb-0" placeholder="Type your keywords...">
                                        <button type="submit" class="d-none"></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-email-open" aria-hidden="true"></i> <span class="active-status pulse"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Message Area -->
                                <div class="top-message-area">
                                    <a href="#" class="dropdown-item"><i class="fa fa-envelope-o"></i><span class="mes-title">A free 6-hour video course on Angular</span> <span class="mes-sent-time">3 min ago</span></a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-envelope-o"></i><span class="mes-title">Google Ads: You'll get a refund soon</span> <span class="mes-sent-time">27 min ago</span></a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-envelope-o"></i><span class="mes-title">New Feature: HTTP Method Selection</span> <span class="mes-sent-time">56 min ago</span></a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-envelope-o"></i><span class="mes-title">The Complete JavaScript Handbook - the new free book</span> <span class="mes-sent-time">1 hour ago</span></a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-envelope-o"></i><span class="mes-title">New comment: Matmin - Admin Template</span> <span class="mes-sent-time">2 days ago</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-notifications-active" aria-hidden="true"></i> <span class="active-status pulse"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Notifications Area -->
                                <div class="top-notifications-area">
                                    <a href="#" class="dropdown-item"><i class="icon_gift_alt"></i><span>We've got something for you!</span></a>
                                    <a href="#" class="dropdown-item"><i class="icon_error-triangle_alt"></i><span>Domain names expiring on Tuesday</span></a>
                                    <a href="#" class="dropdown-item"><i class="icon_check"></i><span>Your commissions has been sent</span></a>
                                    <a href="#" class="dropdown-item"><i class="icon_heart_alt"></i><span>You sold an item!</span></a>
                                    <a href="#" class="dropdown-item"><i class="icon_error-triangle_alt"></i><span>Security alert for your linked Google account</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-globe"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Language Area -->
                                <div class="top-language-area">
                                    <a href="#" class="dropdown-item"><img src="img/core-img/flag-1.png" alt=""> <span>English</span></a>
                                    <a href="#" class="dropdown-item"><img src="img/core-img/flag-2.png" alt=""> <span>German</span></a>
                                    <a href="#" class="dropdown-item"><img src="img/core-img/flag-3.png" alt=""> <span>Spanish</span></a>
                                    <a href="#" class="dropdown-item"><img src="img/core-img/flag-4.png" alt=""> <span>China</span></a>
                                    <a href="#" class="dropdown-item"><img src="img/core-img/flag-5.png" alt=""> <span>Japan</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/member-img/women.jpg" alt=""></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <?php
                                    $db = mysqli_connect('localhost', 'root', '', 'marketit');
                                    $username = $_SESSION['user']['Email'];
                                    $image = $_SESSION['user']['Image'];
                                    $query = "SELECT * FROM login where email = '{$username}' AND Image = '{$image}'";
                                    //$query = "";
                                    $result = mysqli_query($db, $query);
                                    while ($user = mysqli_fetch_assoc($result)) {
                                        // $firstName = $user['firstName'];
                                        // $lastName = $user['lastName'];
                                        $name = $user['Name'];
                                        $image = $user['Image'];
                                    };
                                    ?>
                                    <div class="user-intro bg-img d-flex align-items-center" style="background-image: url(img/thumbnails-img/profile-bg.jpg);">
                                        <!-- Thumb -->
                                        <div class="profile--thumbnail">
                                            <img src="img/member-img/women.jpg" alt="">
                                        </div>
                                        <!-- Profile Text -->
                                        <div class="profile--text-details">
                                            <h6><?php echo "$firstName $lastName"; ?></h6>
                                            <span><?php echo "$email"; ?></span>
                                        </div>
                                    </div>

                                    <a href="#" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i> My profile</a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-envelope-o" aria-hidden="true"></i> Messages</a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-cog" aria-hidden="true"></i> Account settings</a>
                                    <a href="#" class="dropdown-item"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a>
                                    <a href="index.php?logout='1'" style="color:red" class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign-out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- ====== Header Area End ====== -->


    </div>
    </div>

    </div>





    <?php include($url); ?>


    <!-- ====== Footer Area End ====== -->

    </div>
    <!-- ======================================
    ********* Main Wrapper Area End ***********
    ======================================= -->

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
    <script src="assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/vendor_components/jvectormap/lib2/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/vendor_components/jvectormap/lib2/jvectormap.custom-usa.js"></script>

    <script src="js/plugins-js/data-labelling-js/chart-bundel.js"></script>
    <script src="js/plugins-js/data-labelling-js/utils.js"></script>
    <script src="js/plugins-js/data-labelling-js/active.js"></script>

    <script src="js/plugins-js/table-js/scrool-bar.js"></script>
    <script src="js/plugins-js/table-js/table.js"></script>

    <script>
        //To set the class Name when adding a new class
        $(document).ready(function() {
            $('#Course').on('change', function() {
                setClassName();
            })
            $('#classNumber').on('change', function() {
                setClassName();
            })

            function setClassName() {
                $('#className').val("");
                $('#className').val($('#Course option:selected').text() + " " + $('#classNumber').val());
            }
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


/


    <script>
       function tdate() {
           var Userdate = document.getElementById("DOB").value;
           var ToDate = new Date();
           
           if (new Date(UserDate).getTime() >= ToDate.getTime()) {
               alert("Date is invalid");
               return false;
           }
       }
    </script>

    <!-- <script>
        function reload(form)
            {
            var val=form.cat.options[form.cat.options.selectedIndex].value;
            self.location='index.php?cat=' + val ;
            }
    </script> -->

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>