<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$lang['home'];?> </title>

    <!-- Stylesheets -->

</head>

<body>


<!-- ---wrapper-- -->
<div class="page-wrapper">

<!-- preloader -->
<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span data-text-preloader="C" class="letters-loading">
							C
						</span>
						<span data-text-preloader="O" class="letters-loading">
							O
						</span>
						<span data-text-preloader="R" class="letters-loading">
							R
						</span>
						<span data-text-preloader="E" class="letters-loading">
							E
						</span>
						<span data-text-preloader="A" class="letters-loading">
							A
						</span>
						<span data-text-preloader="S" class="letters-loading">
							S
						</span><span data-text-preloader="USA" class="letters-loading">
							USA
						</span>
					</div>
				</div>  
			</div>
		</div>
	</div>
<!-- End preloader -->


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
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->

	

	

</div>
<!-- End page-wrapper -->
    <h1>
        <?= isset($lang['home_Title1']) ? $lang['home_Title1'] : 'Default Title' ?>
    </h1>
    <p>
        <?= isset($lang['home_Section1']) ? $lang['home_Section1'] : 'Default Content' ?>
    </p>

    
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