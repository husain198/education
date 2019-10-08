	<?php $this->load->view('common/header'); ?>
		<div class="banner-2 yellow">
			<img src="http://placehold.it/1920x157" width="1920" height="157" alt="image">
			<div class="banner-text">
				<h2>signin</h2>
				<ul class="breadcrumb yellow">
					<li><a href="#">home</a></li>
					<li>signin</li>
				</ul>
			</div>
			
		</div>
	

			<div class="container">
			<div class="row main">
				<div class="col-sm-12 col-xs-12 alert">
					<?php echo validation_errors(); ?>
					<?php echo $this->session->flashdata('error_messagea'); ?>
				</div>
			
				<div class="col-sm-6 col-xs-12">
					<div class="main-login main-center yellow" style="margin:0;">
						<form class="" method="post" action="<?php echo base_url();?>pages/signin">

							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Your Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="email" class="form-control" name="your_email" id="email"  placeholder="Enter your Email"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group ">
								
								<button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Signin</button>
							</div>

							<div class="form-group ">
								<p>Already have an account! <a href="<?php echo base_url();?>pages/signup">Sign Up Here</a> </p>
							</div>
							
						</form>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<ul class="sign-list yellow">
						<li><a href="#">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<span>signin with facebook</span>
						</a></li>
						<li><a href="#">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<span>signin with twitter</span>
						</a></li>
						<li><a href="#">
							<i class="fa fa-google" aria-hidden="true"></i>
							<span>signin with google</span>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	<?php $this->load->view('common/footer'); ?>