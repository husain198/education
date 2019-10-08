
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!-- title of the page -->
<title>Home</title>

<!-- Bootstrap style sheet -->
<link href="<?php echo base_url();?>assets/front-assets/css/bootstrap.min.css" rel="stylesheet">
<!-- css style sheet -->
<link id="style" rel="stylesheet" href="<?php echo base_url();?>assets/front-assets/css/style.css">

<link id="colors" rel="stylesheet" href="<?php echo base_url();?>assets/front-assets/css/color.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/front-assets/css/switcher.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/front-assets/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/front-assets/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i%2cOxygen:300,400,700" rel="stylesheet"> 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>


	<!-- main wrapper of the page -->
	<div id="wrapper">
		<div class="top-bar4">
			<div class="container">
				<div class="logo"><a href="#"><img src="<?php echo base_url();?>assets/front-assets/images/logo4.png" width="182" height="19" alt="descipline"></a></div>
				<div class="right-panel">
					<form action="#">
						<input type="search" placeholder="Search...">
						<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
					<ul class="login-list">
					<?php $user_login = $this->session->userdata('user_id'); 
						if($user_login){  ?>
						<li><a href="<?php echo base_url();?>pages/profile"><i class="fa fa-sign-in" aria-hidden="true"></i>Your Profile</a></li>
						<li><a href="<?php echo base_url();?>pages/logout"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a></li>	
						<?php }else{   ?>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user-plus" aria-hidden="true"></i>register</a></li>
					<?php 	}
				?>
					
					
					
						
					</ul>
				</div>
			</div>
		</div>
		
		<header id="header2" class="header4 header-yellow">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url();?>">home</a>
								<!--<ul class="drop-down d-7">
									<li><a href="shop-index.html">Home Shop</a></li>
									<li><a href="medical-index.html">Home Medical</a></li>
									<li><a href="lawyer-index.html">Home Lawyer</a></li>
									<li><a href="portfolio-index.html">Home Portfolio</a></li>
								</ul>  -->
							</li>
							<li><a href="<?php echo base_url();?>home/shortcode">short code</a></li>
							<li><a href="#">blog</a>
								<ul class="drop-down d-7">
									<li><a href="<?php echo base_url();?>home/blog_list">blog List</a></li>
									<li><a href="<?php echo base_url();?>home/blog_single">single blog</a></li>
								</ul>
							</li>
							<li class="mega"><a href="#">courses</a>
								<div class="mega-menu d-7">
									<div class="col-md-2 col-sm-3 col-xs-12">
										<strong>Course events <span class="hot">hot</span></strong>
										
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
										
										<strong>Course events</strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
									</div>
									<div class="col-md-2 col-sm-3 col-xs-12">
										<strong>Latest Courses</strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
										
										
										<strong>Latest Courses <span class="new">new</span></strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
										
										
									</div>
									<div class="col-md-2 col-sm-3 col-xs-12">
										<strong>Top Rated</strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
										
										
											<strong>Top Rated</strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
										
										
									</div>
									<div class="col-md-2 col-sm-3 col-xs-12">
										<strong>Free Courses<span class="free">Free</span></strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
										
										<strong>Free Courses</strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/course_list">courses large</a></li>
											<li><a href="<?php echo base_url();?>home/course_grid">grid courses</a></li>
											<li><a href="<?php echo base_url();?>home/course_single">single courses</a></li>
										</ul>
									</div>

									<div class="col-md-4 col-sm-12 col-xs-12 last-menu">
										<strong>recomended courses</strong>

										<div id="carousel-example-generic001" class="carousel slide" data-ride="carousel">

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="http://placehold.it/300x140" alt="image">
													<div class="mega-box">
														<span class="duration">
															duration:<em>1 month</em>
														</span>
														<span class="fee">
															fee:<em>10$</em>
														</span>
													</div>
												</div>
												<div class="item">
													<img src="http://placehold.it/300x140" alt="image">
													<div class="mega-box">
														<span class="duration">
															duration:<em>1 month</em>
														</span>
														<span class="fee">
															fee:<em>10$</em>
														</span>
													</div>
												</div>
												<div class="item">
													<img src="http://placehold.it/300x140" alt="image">
													<div class="mega-box">
														<span class="duration">
															duration:<em>1 month</em>
														</span>
														<span class="fee">
															fee:<em>10$</em>
														</span>
													</div>
												</div>
    
											</div>

											<!-- Controls -->
											<a class="left carousel-control" href="#carousel-example-generic001" role="button" data-slide="prev">
												<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#carousel-example-generic001" role="button" data-slide="next">
												<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
										
									</div>
								</div>
							</li>

							<li><a href="#">events</a>
								<ul class="drop-down d-7">
									<li><a href="<?php echo base_url();?>home/event_classic">events classic</a></li>
									<li><a href="<?php echo base_url();?>home/our_events">our events</a></li>
									<li><a href="<?php echo base_url();?>home/event_single">single event</a></li>
								</ul>
							</li>
							
							
							<li class="mega"><a href="#">features</a>
								<div class="mega-menu d-7 features">
									<div class="col-sm-2 col-xs-12">
										<strong>our features</strong>
										<ul>
											<li><a href="<?php echo base_url();?>home/team">team</a></li>
											<li><a href="<?php echo base_url();?>home/services_simple">services simple</a></li>
											<li><a href="<?php echo base_url();?>home/services_classic">services classic</a></li>
											<li><a href="<?php echo base_url();?>pages/testimonials">testimonials</a></li>
											<li><a href="<?php echo base_url();?>pages/pricing_table">price table</a></li>
											<li><a href="<?php echo base_url();?>pages/signup">signup</a></li>
											<li><a href="<?php echo base_url();?>pages/signin">signin</a></li>
										</ul>
									</div>
									<div class="col-sm-2 col-xs-12">
										<strong>our pages</strong>
										<ul>
											<li><a href="<?php echo base_url();?>pages/about_us">about</a></li>
											<li><a href="<?php echo base_url();?>pages/not_found">404 page</a></li>
											<li><a href="<?php echo base_url();?>pages/search">search page</a></li>
											<li><a href="<?php echo base_url();?>pages/faq">FAQ</a></li>
										</ul>
										
									</div>
									<div class="col-sm-2 col-xs-12">
										<strong>our headers</strong>
										<ul>
											<li><a href="lawyer-index.html">header 1</a></li>
											<li><a href="medical-index.html">header 2</a></li>
											<li><a href="portfolio-index.html">header 3</a></li>
											<li><a href="shop-index.html">header 4</a></li>
										</ul>
									</div>
									<div class="col-sm-6 col-xs-12 course-slider">
										<div id="carousel-example-generic0022" class="carousel slide" data-ride="carousel">

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="http://placehold.it/450x290" class="img" alt="image">
												</div>
												<div class="item">
													<img src="http://placehold.it/450x290" class="img" alt="image">
												</div>
												<div class="item">
													<img src="http://placehold.it/450x290" class="img" alt="image">
													
												</div>
    
											</div>

											<!-- Controls -->
											<a class="left carousel-control" href="#carousel-example-generic0022" role="button" data-slide="prev">
												<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#carousel-example-generic0022" role="button" data-slide="next">
												<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
										
									</div>
								</div>
							</li>
							<li><a href="#">Shop</a>
								<ul class="drop-down d-7">
									<li><a href="<?php echo base_url();?>shop/cart">cart</a></li>
									<li><a href="<?php echo base_url();?>shop/checkout">Checkout</a></li>
									<li><a href="<?php echo base_url();?>shop">Our Shop</a></li>
								</ul>	
							</li>
							<li><a href="<?php echo base_url();?>home/contact_us">contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			
			<div class="tel home layer"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">(+01) 123 456 7896</a></div>
			
		</header>