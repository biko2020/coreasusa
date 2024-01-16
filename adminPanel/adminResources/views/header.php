<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dashboard Panel Menu</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="/coreasusa/public/css/bootstrap.css">
  <link rel="stylesheet" href="/coreasusa/public/css/style.css">
  <link rel="stylesheet" href="/coreasusa/public/css/responsive.css">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <link rel="shortcut icon" href="/coreasusa/public/img/favicon.png" type="image/x-icon">
  <link rel="icon" href="/coreasusa/public/img/favicon.png" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

  <!-- Main Header  -->
  <header class="main-header header-style-three">

    <!-- Header Upper -->
    <div class="header-lower">
      <div class="auto-container">
        <div class="inner-container d-flex justify-content-between align-items-center flex-wrap clearfix">

          <div class="pull-left logo-box">
            <div class="logo"><a href="/coreasusa/public/img/logo.png"><img src="/coreasusa/public/img/logo.png" alt=""
                  title="logo"></a></div>
          </div>

          <div class="nav-outer">
            <!-- Mobile Navigation Toggler -->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md">
              <div class="navbar-header">
                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- navbar Menu -->
              <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                <ul class="navigation clearfix">
                  <li><a href="/coreasusa/adminPanel/">Admin Dashboard</a></li>
                </ul>
              </div>
               <!-- End navbar Menu -->
            </nav>
          </div>

        </div>
      </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
          <a href="#" title="">
            <img src="/coreasusa/public/img/logo-samll.png" alt="" title="logo"></a>
        </div>
        <!--Right Col-->
        <div class="pull-right">
          <!-- Main Menu -->
          <nav class="main-menu">
            <!--Keep This Empty / Menu will come through Javascript-->

          </nav><!-- Main Menu End-->

          <!-- Mobile Navigation Toggler -->
          <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>

        </div>
      </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><span class="icon fa fa-close"></span></div>

      <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
      </nav>
    </div><!-- End Mobile Menu -->

  </header>

</body>

</html>