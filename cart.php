<!DOCTYPE html>
<html lang="en">

<?php
include('head.php');
?>

<body>
<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-1">
		<div class="preloader-inner">
			<div class="preloader-shade"></div>
			<div class="preloader-wrap"></div>
			<div class="preloader-wrap wrap2"></div>
			<div class="preloader-wrap wrap3"></div>
			<div class="preloader-wrap wrap4"></div>
			<div class="preloader-wrap wrap5"></div>
		</div> 
	</div>


       <!-- Nav Header -->
       <?php
		include('nav.php');
		?>
		<!-- Nav Header End -->
		
	<div class="page-content">
		<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Cart</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Cart</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
		
		<!-- contact area -->
		<section class="content-inner shop-account">
			<!-- Product -->
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table check-tbl">
								<thead>
									<tr>
										<th>Product</th>
										<th>Product name</th>
										<th>Unit Price</th>
										<th>Quantity</th>
										<th>Total</th>
										<th class="text-end">Close</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book3.jpg" alt=""></td>
										<td class="product-item-name">Battle Drive</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle">$28.00</td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book2.jpg" alt=""></td>
										<td class="product-item-name">Home</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical3" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle">$28.00</td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book4.jpg" alt=""></td>
										<td class="product-item-name">Such A Fun Age</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical4" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle">$28.00</td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book1.jpg" alt=""></td>
										<td class="product-item-name">Real Life</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical5" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle">$28.00</td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book6.jpg" alt=""></td>
										<td class="product-item-name">Cat Adventure</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical6" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle">$28.00</td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book5.jpg" alt=""></td>
										<td class="product-item-name">Take Out Tango</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical7" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle">$28.00</td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="widget">
							<form class="shop-form"> 
								<h4 class="widget-title">Calculate Shipping</h4>
								<div class="form-group">
									<select class="default-select">
										  <option selected>Credit Card Type</option>
										  <option value="1">Another option</option>
										  <option value="2">A option</option>
										  <option value="3">Potato</option>
									</select>	
								</div>	
								<div class="row">
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="Credit Card Number">
									</div>
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="Card Verification Number">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Coupon Code">
								</div>
								<div class="form-group">
									<a href="cart.php" class="btn btn-primary btnhover" type="button">Apply Coupon</a>
								</div>
							</form>	
						</div>
					</div>
					<div class="col-lg-6">
						<div class="widget">
							<h4 class="widget-title">Cart Subtotal</h4>
							<table class="table-bordered check-tbl m-b25">
								<tbody>
									<tr>
										<td>Order Subtotal</td>
										<td>$125.96</td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td>Free Shipping</td>
									</tr>
									<tr>
										<td>Coupon</td>
										<td>$28.00</td>
									</tr>
									<tr>
										<td>Total</td>
										<td>$506.00</td>
									</tr>
								</tbody>
							</table>
							<div class="form-group m-b25">
								<a href="checkout.php" class="btn btn-primary btnhover" type="button">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Product END -->
		</section>
		<!-- contact area End--> 
	
	</div>
		

		<!-- Footer -->
		<?php
		include('footer.php');
		?>
		<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
	

<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 07:35:23 GMT -->
</html>