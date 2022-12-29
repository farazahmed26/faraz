<?php

include ('db_conn.php');

session_start();

if (isset($_POST['submit'])) {

	$email = mysqli_real_escape_string($conn, $_POST['usermail']);
	$pass = $_POST['password'];

	$select = " SELECT * FROM customers WHERE email = '$email' and pass = '$pass'";

	$result = mysqli_query($conn, $select);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['usermail'] = $email;
		header('location:index.php');
	} 
	else
	 {
		$errors[] = 'Incorrect email password';
	}
}

?>
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
		<?php
		include('nav.php');
		?>
		<!-- Header End -->

		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Login</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Login</li>
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
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content">
									<h4>NEW CUSTOMER</h4>
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									<a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="registration.php">CREATE AN ACCOUNT</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content nav">
									<form id="login" class="tab-pane active col-12" action="" method="post">
										<?php
										if (isset($errors)) {
											foreach ($errors as $error) {
												echo '<span class="error-msg">' . $error . '</span>';
											}
										}
										?>
										<h4 class="text-secondary">LOGIN</h4>
										<p class="font-weight-600">If you have an account with us, please log in.</p>
										<div class="mb-4">
											<label class="label-title">E-MAIL *</label>
											<input name="usermail" required="" class="form-control" placeholder="Your Email Id" type="email">
										</div>
										<div class="mb-4">
											<label class="label-title">PASSWORD *</label>
											<input name="password" required="" class="form-control " placeholder="Type Password" type="password">
										</div>
										<div class="text-left">
											<button name="submit" class="btn btn-primary btnhover me-2">login</button>
											<a data-bs-toggle="tab" href="#forgot-password" class="m-l5"><i class="fas fa-unlock-alt"></i> Forgot Password</a>
										</div>
									</form>
									<form id="forgot-password" class="tab-pane fade  col-12">
										<h4 class="text-secondary">FORGET PASSWORD ?</h4>
										<p class="font-weight-600">We will send you an email to reset your password. </p>
										<div class="mb-3">
											<label class="label-title">E-MAIL *</label>
											<input name="usermail" required="" class="form-control" placeholder="Your Email Id" type="email">
										</div>
										<div class="text-left">
											<a class="btn btn-outline-secondary btnhover m-r10" data-bs-toggle="tab" href="#login">Back</a>
											<button type="submit" value="login now" class="btn btn-primary btnhover me-2">Submit</button>
										</div>
									</form>
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
	<script src="js/custom.js"></script><!-- CUSTOM JS -->


</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 07:35:23 GMT -->

</html>