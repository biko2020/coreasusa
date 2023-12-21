<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $lang['traction'] ?>
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
					<?= $lang['traction'] ?>
				</h2>
			</div>
		</section>
		<!-- End Page Title -->



		<section class="products-section">
			<div class="auto-container">
				<div class="sec-title centered">
					<div class="big-text">
						<?= $lang['traction-back-text']; ?>
					</div>
					<div class="title">
						<?= $lang['traction-products']; ?>
					</div>
					<h2>
						<?= $lang['traction-title']; ?>
					</h2>
				</div>
				<div class="products-carousel owl-carousel owl-theme">

					<!-- Product 1 -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/vehicules/1.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#">Belaz 68010</a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										poids: 28t<br>
										Pneumatiques standard: 26,5-25 НС32 <br>
										Capacité du godet: 4.8m³<br>
										Type de direction: KL<br>
										Longueur de transport: 9.2m<br>
										Largeur de transport: 3.2m
									</div>
								</div>

							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#"> <span class="flaticon-industrial-robot"></span></a>
							</div>
						</div>
					</div>

					<!-- Product 2 -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/vehicules/2.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#">Hidromek HMK 640 WL</a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										poids: 26.3t<br>
										Pneumatiques standard: 26.5 R 25 L3<br>
										Largeur d` godet: 3.3m<br>
										Capacité du godet: 4.2m³ <br>
										Capacité du godet min.: 4.2m³<br>
										Type de direction: KL
									</div>
								</div>

							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#"> <span class="flaticon-industrial-robot"></span></a>
							</div>
						</div>
					</div>

					<!-- Product 3 -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/vehicules/3.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#">Sany SW405K</a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										poids: 18.5t<br>
										Largeur d` godet: 2.975m <br>
										Capacité du godet: 3m³ <br>
										Capacité du godet min.: 3m³ <br>
										Type de direction: AL <br>
										Longueur de transport: 6.862m
									</div>
								</div>

							</div>
							<div class="btn-box text-center">
								<a class="read-more" href="#"> <span class="flaticon-industrial-robot"></span></a>
							</div>
						</div>
					</div>

					<!-- Product 4 -->
					<div class="product-block">
						<div class="inner-box">
							<div class="color-layer"></div>
							<div class="image-box">
								<div class="image">
									<a href="#"><img src="/coreasusa/public/img/products/vehicules/4.png" alt="" /></a>
								</div>
							</div>
							<h5><a href="#">Uranos ZL 50 Gl</a></h5>
							<div class="category"></div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<div class="price">
										poids: 17.5t <br>
										Pneumatiques standard: 23.5-25-16 PR<br>
										Capacité du godet: 3m³ <br>
										Capacité du godet min.: 3m³ <br>
										Longueur de transport: 8.11m <br>
										Largeur de transport: 3m

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