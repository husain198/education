	<?php $this->load->view('common/header'); ?>
		<div class="banner-2 yellow">
			<img src="http://placehold.it/1920x157" width="1920" height="157" alt="image">
			<div class="banner-text">
				<h2>cart</h2>
				<ul class="breadcrumb yellow">
					<li><a href="#">home</a></li>
					<li>cart</li>
				</ul>
			</div>
			
		</div>
		
		<div class="page-section white">
			<div class="container">
				<div class="row">
					<section class="prise-table yellow">
						<div class="table-frame">
							<table class="p-table">
								<tr>
									<th class="col-1"></th>
									<th class="col-2">product</th>
									<th class="col-3">prise</th>
									<th class="col-4">qty</th>
									<th class="col-5">total</th>
								</tr>
								<tr>
									<td class="col-1"><a href="#">&times;</a></td>
									<td class="col-2">RICH LOOK SHIRT</td>
									<td class="col-3">$299.90</td>
									<td class="col-4">
										<div class="input-holder">
											<div class="num-holder yellow">
												<span id="up" href="#"  onclick="updateSpinner(this);">+</span>
												<input id="content" value="0" type="text"/>
												<span id="down" href="#" onclick="updateSpinner(this);">-</span>
											</div>
										</div>
									</td>
									<td class="col-5">$299.90</td>
								</tr>
								<tr>
									<td class="col-1"><a href="#">&times;</a></td>
									<td class="col-2">HOODED T-SHIRT</td>
									<td class="col-3">$163.00</td>
									<td class="col-4">
										<div class="input-holder">
											<div class="num-holder yellow">
												<span id="up" href="#"  onclick="updateSpinner(this);">+</span>
												<input id="content" value="0" type="text"/>
												<span id="down" href="#" onclick="updateSpinner(this);">-</span>
											</div>
										</div>
									</td>
									<td class="col-5">$163.00</td>
								</tr>
								<tr>
									<td class="col-1"><a href="#">&times;</a></td>
									<td class="col-2">BLACK T-SHIRT</td>
									<td class="col-3">$199.00</td>
									<td class="col-4">
										<div class="input-holder">
											<div class="num-holder yellow">
												<span id="up" href="#"  onclick="updateSpinner(this);">+</span>
												<input id="content" value="0" type="text"/>
												<span id="down" href="#" onclick="updateSpinner(this);">-</span>
											</div>
										</div>
									</td>
									<td class="col-5">$199.00</td>
								</tr>
							</table>
						</div>
						<div class="form-holder yellow">
							<form class="coupon-form" action="#">
								<input type="text" placeholder="Enter Your Coupon Code">
								<button type="submit">apply code</button>
							</form>
							<div class="btn-holder">
								<a href="#">update cart</a>
								<a href="#">clear cart</a>
							</div>
						</div>
						<form class="total-form yellow" action="#">
							<div class="total-holder">
								<div class="sub-total">
									<div class="left">sub total</div>
									<div class="right"><em>$661.90</em></div>
								</div>
								<div class="shiping">
									<div class="left">shipping</div>
									<div class="right">
										<label>
											<input type="checkbox">
											Flat Rate: $1.90
										</label>
										<label>
											<input type="checkbox">
											Free Shipping
										</label>
										<a href="#">Calculate Shipping</a>
									</div>
								</div>
								<div class="total">
									<div class="left">total</div>
									<div class="right"><span>$661.90</span></div>
								</div>
							</div>
							<button type="submit">PROCEED TO CHECKOUT</button>
						</form>
					</section>
				</div>
			</div>
		</div>
	<?php $this->load->view('common/footer'); ?>