<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<!-- <title>SmartEDU - Education Responsive php5 Template</title> -->
<title>market-IT</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/marketIT-icon.jpg" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Customer Login</h4>
				</div>
				<div class="modal-body customer-box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
						<li><a href="#Registration" data-toggle="tab">Registration</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Login">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email1" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
											Submit
										</button>
										<a class="for-pwd" href="javascript:;">Forgot your password?</a>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="Registration">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email" placeholder="Email" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="mobile" placeholder="Mobile" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="password" placeholder="Password" type="password">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Save &amp; Continue
										</button>
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/marketIT.jpg" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Services </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.php">Marketing </a>
								<a class="dropdown-item" href="course-grid-3.php">Garden of Eden</a>
								<a class="dropdown-item" href="course-grid-4.php">Clothing</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">Blog </a>
								<a class="dropdown-item" href="blog-single.php">Blog single </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.php">Staff</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a class="hover-btn-new log orange" href="login/index.php"><span>Login</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<!-- <div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');"> -->
				<div id="home" class="first-section" style="background-image:url('images/aiti4.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<!-- <h2><strong>SmartEDU </strong> education College</h2> -->
										<!-- <p class="lead">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p> -->
										<!-- <a href="#" class="hover-btn-new"><span>Contact Us</span></a> -->
										<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
										<!-- <a href="#" class="hover-btn-new"><span>Read More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/aiti1.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<!-- <h2 data-animation="animated zoomInRight">SmartEDU <strong>education school</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/aiti3.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<!-- <h2 data-animation="animated zoomInRight"><strong>VPS Servers</strong> Company</h2>
										<p class="lead" data-animation="animated fadeInLeft">1 IP included with each server
											Your Choice of any OS (CentOS, Windows, Debian, Fedora)
											FREE Reboots</p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<h3>About Us</h3>
					<p class="lead">The Ghana-India Kofi Annan Centre of Excellence in ICT is Ghana's First Advanced Information Technology Institute DBC22.2</p>
				</div>
			</div><!-- end title -->

			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="message-box">
						<h4>First Advanced Information Technology Institute</h4>
						<h2>Welcome to AITI-KACE</h2>
						<p>Established in 2003 through a partnership between the Government of Ghana and the Government of India</p>

						<p> </p>

						<!-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
					</div><!-- end messagebox -->
				</div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">
						<img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
					</div><!-- end media -->
				</div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">
						<img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
					</div><!-- end media -->
				</div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="message-box">
						<h2>We housed the first supercomputer in West Africa</h2>
						<p>The meeting and lecture rooms as well as the 802.11 wireless network guarantee that the <b>AITI</b> can host close to 1000 people at any given time...</p>

						<p> </p>

						<!-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
					</div><!-- end messagebox -->
				</div><!-- end col -->

			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<section class="section lb page-section">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<h3>Our history</h3>
					<p class="lead">In August 2002, H. E. John Agyekum Kufuor, President of Ghana, went to India on a four-day state visit, to find business partners to invest and undertake joint ventures in Ghana. During that visit, the two governments came to a bilateral agreement, to facilitate cooperation in the area of ICT. The Ghana-India Kofi Annan Centre of Excellence in ICT was created as a result</p>
				</div>
			</div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2019</h2>
								<p>The Management of Ghana Investment Fund for Electronic Communications, has signed a Memoranda of Understanding (MoU) between the Ghana Library Authority (GhLA) and the Ghana-India Kofi Annan Centre of Excellence (AITI- KACE) in ICT to champion government's digitalization agenda.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2018</h2>
								<p>Technology Innovation Seminar in collaboration with the Carnegie Mellon University-Africa, aimed at sharing knowledge and exploring opportunities for learning, research and development in artificial intelligence.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2014</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2012</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2010</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2007</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2004</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2002</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">12000</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">240</p>
					<h3>Courses</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">55</p>
					<h3>Years Completed</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div id="plan" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Choose Your Plan</h3>
				<p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="message-box">
						<ul class="nav nav-pills nav-stacked" id="myTabs">
							<li><a class="active" href="#tab1" data-toggle="pill">Monthly Subscription</a></li>
							<li><a href="#tab2" data-toggle="pill">Yearly Subscription</a></li>
						</ul>
					</div>
				</div><!-- end col -->
			</div>




		</div><!-- end container -->
	</div><!-- end section -->

	<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
		<div class="container">
			<div class="section-title text-center">
				<h3>Testimonials</h3>
				<p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="testi-carousel owl-carousel owl-theme">
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_01.png" alt="" class="img-fluid">
								<h4>James Fernando </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
								<p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_02.png" alt="" class="img-fluid">
								<h4>Jacques Philips </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
								<p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_03.png" alt="" class="img-fluid ">
								<h4>Venanda Mercy </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
								<p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_01.png" alt="" class="img-fluid">
								<h4>James Fernando </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
								<p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_02.png" alt="" class="img-fluid">
								<h4>Jacques Philips </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
								<p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_03.png" alt="" class="img-fluid">
								<h4>Venanda Mercy </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
								<p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
							</div>
							<!-- end testi-meta -->
						</div><!-- end testimonial -->
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div class="parallax section dbcolor">
		<div class="container">
			<div class="row logos">
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
					<a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>About US</h3>
						</div>
						<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Information Link</h3>
						</div>
						<ul class="footer-links">
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Contact Details</h3>
						</div>

						<ul class="footer-links">
							<li><a href="mailto:#">info@yoursite.com</a></li>
							<li><a href="#">www.yoursite.com</a></li>
							<li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
							<li>+61 3 8376 6284</li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

			</div><!-- end row -->
		</div><!-- end container -->
	</footer><!-- end footer -->

	<div class="copyrights">
		<div class="container">
			<div class="footer-distributed">
				<div class="footer-center">
					<p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://php.design/">php design</a></p>
				</div>
			</div>
		</div><!-- end container -->
	</div><!-- end copyrights -->

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</php>