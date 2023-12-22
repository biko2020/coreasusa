<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $lang['maintenance'] ?>
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

		<!-- Page title -->
		<section class="page-title" style="background-image:url(/coreasusa/public/img/background/s-1.jpg)">
			<div class="auto-container">
				<h2>
					<?= $lang['maintenance'] ?>
				</h2>
			</div>
		</section>
		<!-- End Page title -->

		<!-- Process Section -->
		<section class="process-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title alternate">
								<div class="title"><?= $lang['process-title']; ?></div>
								<h2><?= $lang['process-title2']; ?></h2>
							</div>
							<!-- Blocks Outer -->
							<div class="blocks-outer">

								<!-- Process Block -->
								<div class="process-block">
									<div class="inner-box">
										<div class="number">01</div>
										<strong><?= $lang['process-One-title']; ?></strong>
										<?= $lang['process-One-text']; ?>
									</div>
								</div>

								<!-- Process Block -->
								<div class="process-block">
									<div class="inner-box">
										<div class="number">02</div>
										<strong><?= $lang['process-Two-title']; ?></strong>
										<?= $lang['process-Two-text']; ?>
									</div>
								</div>

								<!-- Process Block -->
								<div class="process-block">
									<div class="inner-box">
										<div class="number">03</div>
										<strong><?= $lang['process-Three-title']; ?></strong>
										<?= $lang['process-Three-text']; ?>
									</div>
								</div>
							</div>
							<!-- End Blocks Outer -->
						</div>
					</div>

					<!-- Images Column -->
					<div class="images-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="/coreasusa/public/img/mise-en-service/p-01.jpg" alt="" />
							</div>
							<div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="/coreasusa/public/img/mise-en-service/p-02.jpg" alt="" />
							</div>
							<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="/coreasusa/public/img/mise-en-service/p-03.jpg" alt="" />
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Process Section -->


	</div>
	<!-- End page-wrapper -->
	<?php

	// include footer.php page
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