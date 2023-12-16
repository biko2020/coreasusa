<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $lang['vente'] ?>
	</title>


</head>

<body>


	<!-- ---wrapper-- -->
	<div class="page-wrapper">


		<!-- Vertical Lines Start -->
		<div class="vertical-lines-wrapper">
			<div class="vertical-lines">
				<div class="vertical-effect"></div>
				<div class="vertical-effect"></div>
				<div class="vertical-effect"></div>
				<div class="vertical-effect"></div>
				<div class="vertical-effect"></div>
				<div class="vertical-effect"></div>
			</div>
		</div>
		<!-- End Vertical Lines Start -->

		<!-- scrollToTop start -->
		<div class="progress-wrap active-progress">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
					style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
				</path>
			</svg>
		</div>
		<!-- scrollToTop end -->

		<!-- Page Title -->
		<section class="page-title" style="background-image: url(/coreasusa/public/img/background/s-1.jpg)">
			<div class="auto-container">

				<h2>
					<?= $lang['vente'] ?>
				</h2>
			</div>
		</section>
		<!-- End Page Title -->



		<!-- Vente Products Section -->
		<section class="products-section">
			<div class="auto-container">
				<div class="sec-title centered">
					<div class="big-text"><?= $lang['vente-back-text'] ?></div>
					<div class="title"><?= $lang['vente-products'] ?></div>
					<h2><?= $lang['vente-title'] ?></h2>
				</div>
			</div>
		</section>
		<section class="approach-section">
			<div class="auto-container">

				<div class="row clearfix">

					<!-- Approach Block -->
					<div class="approach-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="about.html#"><img src="/coreasusa/public/img/products/pv-1.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h4><a href="oil-gas.html">Electric Forkilft</a></h4>
								<div class="text">Max.Load Capacity: 3T<br>
									Max.Left Height: 3m <br>
									Operation Mode: Seated</div>
								<!-- <a class="explore" href="oil-gas.html">Explore More <span class="fa fa-plus"></span></a> -->
							</div>
						</div>
					</div>

					<!-- Approach Block -->
					<div class="approach-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="about.html#"><img src="/coreasusa/public/img/products/pv-2.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h4><a href="oil-gas.html">Our Mission</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</div>
								<a class="explore" href="oil-gas.html">Explore More <span class="fa fa-plus"></span></a>
							</div>
						</div>
					</div>

					<!-- Approach Block -->
					<div class="approach-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="about.html#"><img src="/coreasusa/public/img/products/pv-3.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h4><a href="oil-gas.html">Our Value</a></h4>
								<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</div>
								<a class="explore" href="oil-gas.html">Explore More <span class="fa fa-plus"></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End vente Products Section -->


	</div>
	<!-- End page-wrapper -->

	<?php
	// Include footer.php
	include __DIR__ . '/../footer.php';
	?>

	<script src="/coreasusa/public/js/jquery.js"></script>
	<script src="/coreasusa/public/js/popper.min.js"></script>
	<script src="/coreasusa/public/js/bootstrap.min.js"></script>
	<script src="/coreasusa/public/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="/coreasusa/public/js/magnific-popup.min.js"></script>
	<script src="/coreasusa/public/js/appear.js"></script>
	<script src="/coreasusa/public/js/parallax.min.js"></script>
	<script src="/coreasusa/public/js/tilt.jquery.min.js"></script>
	<script src="/coreasusa/public/js/jquery.paroller.min.js"></script>
	<script src="/coreasusa/public/js/owl.js"></script>
	<script src="/coreasusa/public/js/wow.js"></script>
	<script src="/coreasusa/public/js/odometer.js"></script>
	<script src="/coreasusa/public/js/backToTop.js"></script>
	<script src="/coreasusa/public/js/jquery-ui.js"></script>
	<!-- <script src="/coreasusa/public/js/cursor-script.js"></script> -->
	<script src="/coreasusa/public/js/script.js"></script>

</body>

</html>