	<?php $this->load->view('common/header'); ?>
		<div class="banner-2 yellow">
			<img src="http://placehold.it/1920x157" width="1920" height="157" alt="image">
			<div class="banner-text">
				<h2>checkout</h2>
				<ul class="breadcrumb yellow">
					<li><a href="#">home</a></li>
					<li>checkout</li>
				</ul>
			</div>
			
		</div>
		
		<div class="page-section white">
			<div class="container">
				<div class="row">
					<section class="checkout-holder yellow">
						<div class="customer">
							<span>Returning customer? </span>
							<a href="#">Click Here To Login</a>
						</div>
						<div class="customer">
							<span>have a coupon? </span>
							<a href="#">Click Here To Enter Your Code</a>
						</div>
						<div class="row left-row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<h3>Billing Details</h3>
								<form class="billing-form" action="#">
									<div class="b-row row">
										<div class="col-sm-6 col-xs-12">
											<input type="text" placeholder="First Name *">
										</div>
										<div class="col-sm-6 col-xs-12">
											<input type="text" placeholder="Last Name *">
										</div>
									</div>
									<div class="b-row row">
										<div class="col-sm-6 col-xs-12">
											<input type="email" placeholder="Emal Address *">
										</div>
										<div class="col-sm-6 col-xs-12">
											<input type="tel" placeholder="Phone *">
										</div>
									</div>
									<select>
										<option>Country *</option>
										<option>Country 1</option>
										<option>Country 2</option>
										<option>Country 3</option>
									</select>
									<input type="text" placeholder="Address 1 *">
									<input type="text" placeholder="Address 2 *">
									<div class="b-row row">
										<div class="col-sm-6 col-xs-12">
											<select>
												<option>State *</option>
												<option>State 1</option>
												<option>State 2</option>
												<option>State 3</option>
												<option>State 4</option>
											</select>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<input type="text" placeholder="Postal / Zip *">
										</div>
									</div>
									<div class="check-holder">
										<label>
											<input type="checkbox">
											<span>Create an account?</span>
										</label>
									</div>
									<div class="check-holder2">
										<label>
											<input type="checkbox">
											<span>Ship to a different address ?</span>
										</label>
									</div>
									<div class="note">
										<label>Order Notes</label>
										<textarea placeholder="Notes about your order e.g. Special notes for delivery"></textarea>
									</div>
								</form>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<h3>your order</h3>
								<form action="#" class="total-form order yellow">
									<div class="total-holder yellow">
										<div class="order-total">
											<div class="left">product</div>
											<div class="right">total</div>
										</div>
										<div class="product-holder">
											<div class="left"><img src="http://placehold.it/98x78" alt="image" height="98" width="78">RICH LOOK SHIRT</div>
											<div class="right">$299.90</div>
										</div>
										<div class="product-holder">
											<div class="left"><img src="http://placehold.it/98x78" alt="image" height="98" width="78">HOODED T-SHIRT</div>
											<div class="right">$163.00</div>
										</div>
										<div class="product-holder">
											<div class="left"><img src="http://placehold.it/98x78" alt="image" height="98" width="78">HOODED T-SHIRT</div>
											<div class="right">$163.00</div>
										</div>
										<div class="sub-total order yellow">
											<div class="left">sub total</div>
											<div class="right"><em>$661.90</em></div>
										</div>
										<div class="shiping free">
											<div class="left">shipping</div>
											<div class="right">
												Free Shipping
											</div>
										</div>
										<div class="total">
											<div class="left">total</div>
											<div class="right"><span>$661.90</span></div>
										</div>
									</div>
									<div class="payment-holder">
										<div class="radio">
											<label><input type="radio" name="optradio">Cheque Payment</label>
										</div>
										<div class="radio">
											<label><input type="radio" name="optradio">Cash on Delivery</label>
											<p>The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife. </p>
										</div>
										<div class="radio">
											<label><input type="radio" name="optradio">paypal</label>
											<img src="images/bg-cards.jpg" width="218" height="23" alt="image">
										</div>
									</div>
									<button type="submit"><i class="fa fa-check" aria-hidden="true"></i>Place your order</button>
								</form>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	<?php $this->load->view('common/footer'); ?>