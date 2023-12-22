<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $lang['divers'] ?>
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
		<section class="page-title" style="background-image: url(/coreasusa/public/img/background/s-3.png)">
			<div class="auto-container">

				<h2>
					<?= $lang['divers'] ?>
				</h2>
			</div>
		</section>
		<!-- End Page Title -->



		<section class="products-section">
			<div class="auto-container">
				<div class="sec-title alternate centered">
					<div class="title"><?= $lang['divers-title']; ?></div>
					<p><?= $lang['divers-text']; ?></p>
				</div>
				<div class="products-carousel owl-carousel owl-theme">

					<!-- Traction Battery -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/other-equipment/b-01.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#"><?= $lang['divers-battery']; ?></a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										Voltage: Any volt <br>
										Lead acid or Lithium-ion<br>
										Size: Any <br>
										Nationwide Shipping
									</div>
								</div>

							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#"> <span class="flaticon-industrial-robot"></span></a>
							</div>
						</div>
					</div>

					<!-- Industrial Tires -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/other-equipment/t-01.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#"><?= $lang['divers-tires']; ?></a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										Types: Smooth or treaded <br>
										Any Width and Height <br>
										Any Diameter <br>
										Nationwide Shipping
									</div>
								</div>

							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#"> <span class="flaticon-industrial-robot"></span></a>
							</div>
						</div>
					</div>

					<!-- Battery Chargers -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/other-equipment/c-01.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#"><?= $lang['divers-chargers']; ?></a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										Capacity: Any volt <br>
										Cell: Any <br>
										Single or Triple Phase <br>
										Nationwide Shipping
									</div>
								</div>

							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#"> <span class="flaticon-industrial-robot"></span></a>
							</div>
						</div>
					</div>

					<!-- Pallet Jack 4 -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/other-equipment/p-01.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#"><?= $lang['divers-pallet']; ?></a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										Capacity: Any <br>
										Model: Any <br>
										Electric Pallet Jack <br>
										Nationwide Shipping

									</div>
								</div>

							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#"> <span class="flaticon-industrial-robot"></span></a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>

	</div>

	<!-- End page-wrapper -->
	<?php
	// inlude footer page
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