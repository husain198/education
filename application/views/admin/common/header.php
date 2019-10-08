<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Education </title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url();?>assets/backend-assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/backend-assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/backend-assets/css/animate.min.css" rel="stylesheet">
  
 <link href="<?php echo base_url();?>assets/backend-assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url();?>assets/backend-assets/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend-assets/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="<?php echo base_url();?>assets/backend-assets/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/backend-assets/css/floatexamples.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url();?>assets/backend-assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/backend-assets/js/nprogress.js"></script>
</head>


	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php $this->load->view('admin/common/menu'); ?>
				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav class="" role="navigation">
							<div class="nav toggle">
							  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>
							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									  <img src="<?php echo base_url();?>assets/backend-assets/images/img.jpg" alt="">John Doe 
									  <span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
										<li><a href="javascript:;">  Profile</a></li>
										<li>
											<a href="javascript:;">
											  <span class="badge bg-red pull-right">50%</span>
											  <span>Settings</span>
											</a>
										</li>
										<li><a href="javascript:;">Help</a></li>
										<li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
									</ul>
								</li>

								
							</ul>
						</nav>
					</div>
				</div>
			  <!-- /top navigation -->