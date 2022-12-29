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
		<!-- Header -->
		<header class="site-header mo-left header style-1">
			<!-- Main Header -->
			<div class="header-info-bar">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.php"><img src="images/logo.png" alt="logo"></a>
					</div>
					
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">
							<ul class="navbar-nav header-right">
								<li class="nav-item">
									<a class="nav-link" href="wishlist.php">
										<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
										<span class="badge">21</span>
									</a>
								</li>
								<li class="nav-item">
									<button type="button" class="nav-link box cart-btn">
										<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
										<span class="badge">5</span>
									</button>
									<ul class="dropdown-menu cart-list">
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="books-detail.php"> 
														<img alt="" class="media-object" src="images/books/small/pic1.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="books-detail.php" class="media-heading">Real Life</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="books-detail.php"> 
														<img alt="" class="media-object" src="images/books/small/pic2.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="books-detail.php" class="media-heading">Home</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="books-detail.php"> 
														<img alt="" class="media-object" src="images/books/small/pic3.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="books-detail.php" class="media-heading">Such a fun age</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item text-center">
											<h6 class="text-secondary">Totle = $500</h6>
										</li>
										<li class="text-center d-flex">
											<a href="cart.php" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
											<a href="checkout.php" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown profile-dropdown  ms-4">
									<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<img src="images/profile1.jpg" alt="/">
										<div class="profile-info">
											<h6 class="title">Brian</h6>
											<span>info@gmail.com</span>
										</div>
									</a>
									<div class="dropdown-menu py-0 dropdown-menu-end">
										<div class="dropdown-header">
											<h6 class="m-0">Brian</h6>
											<span>info@gmail.com</span>
										</div>
										<div class="dropdown-body">
											<a href="my-profile.php" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
												<div>
													<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
													<span class="ms-2">Profile</span>
												</div>
											</a>
											<a href="cart.php" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
												<div>
													<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
													<span class="ms-2">My Order</span>
												</div>
											</a>
											<a href="wishlist.php" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
												<div>
													<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
													<span class="ms-2">Wishlist</span>
												</div>
											</a>
										</div>
										<div class="dropdown-footer">
											<a class="btn btn-primary w-100 btnhover btn-sm" href="login.php">Log Out</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<!-- header search nav -->
					<div class="header-search-nav">
						<form class="header-item-search">
							<div class="input-group search-input">
								<select class="default-select">
									<option>Category</option>
									<option>Photography </option>
									<option>Arts</option>
									<option>Adventure</option>
									<option>Action</option>
									<option>Games</option>
									<option>Movies</option>
									<option>Comics</option>
									<option>Biographies</option>
									<option>Children’s Books</option>
									<option>Historical</option>
									<option>Contemporary</option>
									<option>Classics</option>
									<option>Education</option>
								</select>
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Main Header End -->
			
			<!-- Main Header -->
			<div class="sticky-header main-bar-wraper navbar-expand-lg">
				<div class="main-bar clearfix">
					<div class="container clearfix">
						<!-- Website Logo -->
						<div class="logo-header logo-dark">
							<a href="index.php"><img src="images/logo.png" alt="logo"></a>
						</div>
						
						<!-- Nav Toggle Button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						
						<!-- EXTRA NAV -->
						<div class="extra-nav">
							<div class="extra-cell">
								<a href="contact-us.php" class="btn btn-primary btnhover">Get In Touch</a>	
							</div>
						</div>
						
						<!-- Main Nav -->
						<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
							<div class="logo-header logo-dark">
								<a href="index.php"><img src="images/logo.png" alt=""></a>
							</div>
							<form class="search-input">
								<div class="input-group">
									<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
									<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
								</div>
							</form>
							<ul class="nav navbar-nav">
								<li class="sub-menu-down"><a href="javascript:void(0);"><span>Home</span></a>
									<ul class="sub-menu">
										<li><a href="index.php">Home 1</a></li>
										<li><a href="index-2.php">Home 2</a></li>
									</ul>
								</li>
								<li><a href="about.php"><span>About Us</span></a></li>
								<li class="sub-menu-down"><a href="javascript:void(0);"><span>Pages</span></a>
									<ul class="sub-menu">
										<li><a href="my-profile.php">My Profile</a></li>
										<li><a href="services.php">Services</a></li>
										<li><a href="faq.php">FAQ's</a></li>
										<li><a href="help-desk.php">Help Desk</a></li>
										<li><a href="coming-soon.php">Coming Soon</a></li>
										<li><a href="pricing.php">Pricing</a></li>
										<li><a href="privacy-policy.php">Privacy Policy</a></li>
										<li><a href="under-construction.php">Under Construction</a></li>
										<li><a href="error-404.php">Error 404</a></li>
									</ul>
								</li>
								<li class="sub-menu-down"><a href="javascript:void(0);"><span>Shop</span></a>
									<ul class="sub-menu">
										<li><a href="books.php">Shop Grid</a></li>
										<li><a href="books-grid-view-sidebar.php">Shop Grid Sidebar</a></li>
										<li><a href="books-list.php">Shop List</a></li>
										<li><a href="books-list-view-sidebar.php">Shop List Sidebar</a></li>
										<li><a href="books-detail.php">Shop Detail</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="wishlist.php">Wishlist</a></li>
										<li><a href="login.php">Login</a></li>
										<li><a href="registration.php">Registration</a></li>
									</ul>
								</li>
								<li class="sub-menu-down"><a href="javascript:void(0);"><span>Blog</span></a>
									<ul class="sub-menu">
										<li><a href="blog-grid.php">Blog Grid</a></li>
										<li><a href="blog-large-sidebar.php">Blog Large Sidebar</a></li>
										<li><a href="blog-list-sidebar.php">Blog List Sidebar</a></li>
										<li><a href="blog-detail.php">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact-us.php"><span>Contact Us</span></a></li>
							</ul>
							<div class="dz-social-icon">
								<ul>
									<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
									<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
									<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
									<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Header End -->
			
		</header>
		<!-- Header End -->
		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Checkout</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Checkout</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner-1">
				<!-- Product -->
				<div class="container">
					<form class="shop-form">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="widget">
									<h4 class="widget-title">Billing & Shipping Address</h4>
									<div class="form-group">
										<select class="default-select">
											<option value="1">Åland Islands</option>
											<option value="2">Afghanistan</option>
											<option value="3">Albania</option>
											<option value="4">Algeria</option>
											<option value="5">Andorra</option>
											<option value="6">Angola</option>
											<option value="7">Anguilla</option>
											<option value="8">Antarctica</option>
											<option value="9">Antigua and Barbuda</option>
											<option value="10">Argentina</option>
											<option value="11">Armenia</option>
											<option value="12">Aruba</option>
											<option value="13">Australia</option>
										</select>	
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="First Name">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Last Name">
										</div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Company Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Address">
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Town / City">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="State / County">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Postcode / Zip">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Phone">
										</div>
									</div>
									<button class="btn btn-primary btnhover mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#create-an-account">Create an account <i class="fa fa-arrow-circle-o-down"></i></button>
									<div id="create-an-account" class="collapse">
										<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<button class="btn btn-primary btnhover mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#different-address">Ship to a different address <i class="fa fa-arrow-circle-o-down"></i></button>
								<div id="different-address" class="collapse">
									<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
									<div class="form-group">
										<select class="default-select">
											<option value="">Åland Islands</option>
											<option value="">Afghanistan</option>
											<option value="">Albania</option>
											<option value="">Algeria</option>
											<option value="">Andorra</option>
											<option value="">Angola</option>
											<option value="">Anguilla</option>
											<option value="">Antarctica</option>
											<option value="">Antigua and Barbuda</option>
											<option value="">Argentina</option>
											<option value="">Armenia</option>
											<option value="">Aruba</option>
											<option value="">Australia</option>
										</select>	
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="First Name">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Last Name">
										</div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Company Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Address">
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Town / City">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="State / County">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Postcode / Zip">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Phone">
										</div>
									</div>
									<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
								</div>
							
							</div>
						</div>
					</form>
					<div class="dz-divider bg-gray-dark text-gray-dark icon-center  my-5"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
					<div class="row">
						<div class="col-lg-6">
							<div class="widget">
								<h4 class="widget-title">Your Order</h4>
								<table class="table-bordered check-tbl">
									<thead class="text-center">
										<tr>
											<th>IMAGE</th>
											<th>PRODUCT NAME</th>
											<th>TOTAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="product-item-img"><img src="images/books/grid/book3.jpg" alt=""></td>
											<td class="product-item-name">Prduct Item 5</td>
											<td class="product-price">$28.00</td>
										</tr>
										<tr>
											<td class="product-item-img"><img src="images/books/grid/book2.jpg" alt=""></td>
											<td class="product-item-name">Prduct Item 4</td>
											<td class="product-price">$36.00</td>
										</tr>
										<tr>
											<td class="product-item-img"><img src="images/books/grid/book4.jpg" alt=""></td>
											<td class="product-item-name">Prduct Item 3</td>
											<td class="product-price">$28.00</td>
										</tr>
										<tr>
											<td class="product-item-img"><img src="images/books/grid/book5.jpg" alt=""></td>
											<td class="product-item-name">Prduct Item 2</td>
											<td class="product-price">$36.00</td>
										</tr>
										<tr>
											<td class="product-item-img"><img src="images/books/grid/book1.jpg" alt=""></td>
											<td class="product-item-name">Prduct Item 1</td>
											<td class="product-price">$28.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-6">
							<form class="shop-form widget">
								<h4 class="widget-title">Order Total</h4>
								<table class="table-bordered check-tbl mb-4">
									<tbody>
										<tr>
											<td>Order Subtotal</td>
											<td class="product-price">$125.96</td>
										</tr>
										<tr>
											<td>Shipping</td>
											<td>Free Shipping</td>
										</tr>
										<tr>
											<td>Coupon</td>
											<td class="product-price">$28.00</td>
										</tr>
										<tr>
											<td>Total</td>
											<td class="product-price-total">$506.00</td>
										</tr>
									</tbody>
								</table>
								<h4 class="widget-title">Payment Method</h4>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name on Card">
								</div>
								<div class="form-group">
									<select class="default-select">
										<option value="">Credit Card Type</option>
										<option value="">Another option</option>
										<option value="">A option</option>
										<option value="">Potato</option>
									</select>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Credit Card Number">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Card Verification Number">
								</div>
								<div class="form-group">
									<button class="btn btn-primary btnhover" type="button">Place Order Now </button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End--> 
		</div>
		<!-- Footer -->
		<footer class="site-footer style-1">
			<!-- Footer Category -->
			<div class="footer-category">
				<div class="container">
					<div class="category-toggle">
						<a href="javascript:void(0);" class="toggle-btn">Books categories</a>
						<div class="toggle-items row book-grid-row">
							<div class="footer-col-book">
								<ul>
									<li><a href="books.php">Architecture</a></li>
									<li><a href="books.php">Art</a></li>
									<li><a href="books.php">Action</a></li>
									<li><a href="books.php">Biography</a></li>
									<li><a href="books.php">Body, Mind & Spirit</a></li>
									<li><a href="books.php">Business & Economics</a></li>
									<li><a href="books.php">Children Fiction</a></li>
									<li><a href="books.php">Children Non-Fiction</a></li>
									<li><a href="books.php">Comics & Graphics</a></li>
									<li><a href="books.php">Cooking</a></li>
									<li><a href="books.php">Crafts & Hobbies</a></li>
									<li><a href="books.php">Design</a></li>
									<li><a href="books.php">Drama</a></li>
									<li><a href="books.php">Education</a></li>
									<li><a href="books.php">Family & Relationships</a></li>
									<li><a href="books.php">Fiction</a></li>
									<li><a href="books.php">Foreign Language</a></li>
									<li><a href="books.php">Games</a></li>
									<li><a href="books.php">Gardening</a></li>
									<li><a href="books.php">Health & Fitness</a></li>
									<li><a href="books.php">History</a></li>
									<li><a href="books.php">House & Home</a></li>
									<li><a href="books.php">Humor</a></li>
									<li><a href="books.php">Literary Collections</a></li>
									<li><a href="books.php">Mathematics</a></li>
									<li><a href="books.php">Medical</a></li>
									<li><a href="books.php">Nature</a></li>
									<li><a href="books.php">Performing Arts</a></li>
									<li><a href="books.php">Pets</a></li>
									<li><a href="books.php">Show others</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Category End -->
			
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-12">
							<div class="widget widget_about">
								<div class="footer-logo logo-white">
									<a href="index.php"><img src="images/logo.png" alt=""></a> 
								</div>
								<p class="text">Bookland is a Book Store Ecommerce Website Template by DexignZone lorem ipsum dolor sit</p>
								<div class="dz-social-icon style-1">
									<ul>
										<li><a href="https://www.facebook.com/dexignzone" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
										<li><a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
										<li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4">
							<div class="widget widget_services">
								<h5 class="footer-title">Our Links</h5>
								<ul>
									<li><a href="about.php">About us</a></li>
									<li><a href="contact-us.php">Contact us</a></li>
									<li><a href="privacy-policy.php">Privacy Policy</a></li>
									<li><a href="pricing.php">Pricing Table</a></li>
									<li><a href="faq.php">FAQ</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4 col-4">
							<div class="widget widget_services">
								<h5 class="footer-title">Bookland ?</h5>
								<ul>
									<li><a href="index.php">Bookland</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="books-detail.php">Book Details</a></li>
									<li><a href="blog-detail.php">Blog Details</a></li>
									<li><a href="books.php">Shop</a></li>
								</ul>   
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4">
							<div class="widget widget_services">
								<h5 class="footer-title">Resources</h5>
								<ul>
									<li><a href="services.php">Download</a></li>
									<li><a href="help-desk.php">Help Center</a></li>
									<li><a href="cart.php">Shop Cart</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="about.php">Partner</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
							<div class="widget widget_getintuch">
								<h5 class="footer-title">Get in Touch With Us</h5>
								<ul>
									<li>
										<i class="flaticon-placeholder"></i>
										<span>832  Thompson Drive, San Fransisco CA 94107,US</span>
									</li>
									<li>
										<i class="flaticon-phone"></i>
										<span>+123 345123 556<br>
										+123 345123 556</span>
									</li>
									<li>
										<i class="flaticon-email"></i> 
										<span>support@bookland.id<br>
										info@bookland.id</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Top End -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row fb-inner">
						<div class="col-lg-6 col-md-12 text-start"> 
							<p class="copyright-text">Bookland Book Store Ecommerce Website - © 2022 All Rights Reserved</p>
						</div>
						<div class="col-lg-6 col-md-12 text-end"> 
							<p>Made with <span class="heart"></span> by <a href="https://dexignzone.com/">DexignZone</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Bottom End -->
			
		</footer>
		<!-- Footer End -->
	
		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
	
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->


</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 07:35:23 GMT -->
</html>