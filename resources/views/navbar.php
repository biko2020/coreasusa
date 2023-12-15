<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coreasusa</title>

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
              <div class="text">
                <?= $lang['top-header-message']; ?>
              </div>
            </div>

            <!-- Top Right -->
            <div class="top-right pull-right">
              <!-- <div class="clock"></div> -->
              <div class="social-box">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>

              </div>

              <!-- Languages Box -->
              <div class="language-selector">
                <a class="english" href="?lang=en"><img src="/coreasusa/public/img/icons/flag_en.png" alt="English"></a>
                <a class="french" href="?lang=fr"><img src="/coreasusa/public/img/icons/flag_fr.png" alt="French"></a>
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
              <div class="logo"><a href="/coreasusa/?lang=<?= $lang['language'] ?>"><img
                    src="/coreasusa/public/img/logo.png" alt="" title="logo"></a>
              </div>
            </div>

            <div class="pull-right upper-right clearfix">

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-telephone"></span></div>
                <ul>
                  <li><strong>
                      <?= $lang['call'] ?>
                    </strong></li>
                  <li>+ (617)447-9325</li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                <ul>
                  <li><strong>+ (781)521-0234</strong></li>
                  <li>240 Zone Industrielle Zenata-Casablanca</li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box">
                <div class="icon-box"><span class="flaticon-message"></span></div>
                <ul>
                  <li><strong>Mail Us</strong></li>
                  <li>jboulal@coreasusa.com</li>
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
                <!-- Menu Items -->
                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                  <ul class="navigation clearfix">
                    <li><a href="/coreasusa/?lang=<?= $lang['language']; ?>">
                        <?= $lang['apropos']; ?>
                      </a></li>

                    <li class="dropdown"><a href="#">
                        <?= $lang['solutions']; ?>
                      </a>
                      <ul>
                        <li><a href="/coreasusa/vente?lang=<?= $lang['language']; ?>">
                            <?= $lang['vente']; ?>
                          </a></li>
                        <li><a href="/coreasusa/location?lang=<?= $lang['language']; ?>">
                            <?= $lang['location']; ?>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#">
                        <?= $lang['materiels']; ?>
                      </a>
                      <ul>
                        <li><a href="/coreasusa/manutention?lang=<?= $lang['language']; ?>">
                            <?= $lang['manutention']; ?>
                          </a></li>
                        <li><a href="/coreasusa/elevation?lang=<?= $lang['language']; ?>">
                            <?= $lang['elevation']; ?>
                          </a></li>
                        <li><a href="/coreasusa/traction?lang=<?= $lang['language']; ?>">
                            <?= $lang['traction']; ?>
                          </a></li>
                        <li><a href="/coreasusa/divers?lang=<?= $lang['language']; ?>">
                            <?= $lang['divers']; ?>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#">
                        <?= $lang['services']; ?>
                      </a>
                      <ul>
                        <li><a href="/coreasusa/miseenservice?lang=<?= $lang['language']; ?>">
                            <?= $lang['miseenservice']; ?>
                          </a></li>
                        <li><a href="/coreasusa/maintenance?lang=<?= $lang['language']; ?>">
                            <?= $lang['maintenance']; ?>
                          </a></li>
                      </ul>
                    </li>

                    <li><a href="/coreasusa/contact?lang=<?= $lang['language']; ?>">
                        <?= $lang['contact']; ?>
                      </a></li>
                  </ul>
                </div>
              </nav>

              <!-- Main Menu End-->
              <div class="outer-box clearfix">

                <!-- Search Btn -->
                <!-- <div class="search-box-btn search-box-outer"><span class="icon flaticon-loupe"></span></div> -->

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
            <a href="/coreasusa/?lang=<?= $lang['language'] ?>">
              <img src="/coreasusa/public/img/logo-small.png" alt="" title="">
            </a>
          </div>
          <!--Right Col-->
          <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
              <!--Keep This Empty / Menu will come through Javascript-->
            </nav>
            <!-- Main Menu End-->

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
          <div class="nav-logo"><a href="/coreasusa/?lang=<?= $lang['language'] ?>">

              <img src="/coreasusa/public/img/logo.png" alt="" title="">
            </a>
          </div>
          <div class="menu-outer"><!--Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
      </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

  <?php } ?>


</body>

</html>