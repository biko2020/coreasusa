<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
</head>

<body>
  <?php
  require_once(__DIR__ . '/../../config/config.php');
  ?>
  <?php
  if (isset($lang['apropos']) && $lang['apropos'] !== null) {
    ?>

    <!-- Main Header-->
    <header class="main-header">

      <!-- Header Top -->
      <div class="header-top">
        <div class="auto-container">
          <div class="clearfix">
            <!-- Top Left -->
            <div class="top-left">
              <div class="text">Welcome to our <a href="index.html#">Coreasusa</a> Company!</div>
            </div>

            <!-- Top Right -->
            <div class="top-right pull-right">
              <div class="clock">We'are Open: Mon - Sat 8:00 - 18:00</div>
              <div class="social-box">
                <a href="index.php#" class="fa fa-facebook"></a>
                <a href="index.php#" class="fa fa-twitter"></a>
                <a href="index.php#" class="fa fa-dribbble"></a>
                <a href="index.php#" class="fa fa-behance"></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Header Upper -->
      <div class="header-upper">
        <div class="auto-container">
          <div class="clearfix">

            <div class="pull-left logo-box">
              <div class="logo"><a href="index.php"><img src="/coreasusa/public/img/logo.png" alt="" title="logo"></a></div>
            </div>

            <div class="pull-right upper-right clearfix">

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-telephone"></span></div>
                <ul>
                  <li><strong>Call Us for help!</strong></li>
                  <li>+ (888) 452 1505</li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                <ul>
                  <li><strong>+ (888) 452 1505</strong></li>
                  <li>30 Commercial Road, Australia</li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-message"></span></div>
                <ul>
                  <li><strong>Mail Us</strong></li>
                  <li>help@gmail.com</li>
                </ul>
              </div>

            </div>

          </div>
        </div>
      </div>
      <!-- End Header Upper -->

      <!-- Header Upper -->
      <div class="header-lower">
        <div class="auto-container">
          <div class="inner-container clearfix">

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

                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                  <ul class="navigation clearfix">
                    <li><a href="/coreasusa/"><?=$lang['apropos'];?></a></li>

                    <li class="dropdown"><a href="#"><?=$lang['solutions'];?></a>
                      <ul>
                        <li><a href="/coreasusa/vente"><?=$lang['vente'];?></a></li>
                        <li><a href="/coreasusa/location"><?=$lang['location']?></a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#"><?=$lang['materiels'];?></a>
                      <ul>
                        <li><a href="/coreasusa/manutention"><?=$lang['manutention'];?></a></li>
                        <li><a href="/coreasusa/elevation"><?=$lang['elevation'];?></a></li>
                        <li><a href="/coreasusa/traction"><?=$lang['traction'];?></a></li>
                        <li><a href="/coreasusa/divers"><?=$lang['divers'];?></a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#"><?=$lang['services'];?></a>
                      <ul>
                        <li><a href="/coreasusa/mise-en-service"><?=$lang['mise-en-service']?></a></li>
                        <li><a href="/coreasusa/maintenance"><?=$lang['maintenance']?></a></li>
                      </ul>
                    </li>

                    <li><a href="/coreasusa/contact"><?=$lang['contact']?></a></li>
                  </ul>
                </div>
              </nav>

              <!-- Main Menu End-->
              <div class="outer-box clearfix">

                <!-- Search Btn -->
                <div class="search-box-btn search-box-outer"><span class="icon flaticon-loupe"></span></div>

              </div>
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
            <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
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
          <div class="nav-logo"><a href="index.html"><img src="/coreasusa/public/img/logo.png" alt="" title=""></a></div>
          <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
      </div><!-- End Mobile Menu -->
<!-- languages icons -->
<div class="language-selector">
      <a class="english" href="?lang=en"><img src="/coreasusa/public/img/icons/flag_en.png" alt="English"></a>
      <a class="french" href="?lang=fr"><img src="/coreasusa/public/img/icons/flag_fr.png" alt="French"></a>
    </div>
    </header>
    <!-- End Main Header -->

    <?php } ?>
    

</body>

</html>