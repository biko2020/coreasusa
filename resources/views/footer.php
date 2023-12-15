<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>footer</title>
</head>

<body>
  <div class="page-wrapper">

    <!-- Footer Style Two -->
    <footer class="main-footer" style="background-image:url(/coreasusa/public/img/background/pattern-12.png)">
      <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
          <div class="row clearfix">

            <!-- Big Column -->
            <div class="big-column col-lg-6 col-md-12 col-sm-12">
              <div class="row clearfix">

                <!-- Footer Column -->
                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget logo-widget">
                    <div class="logo">
                      <a href="#"><img src="/coreasusa/public/img/footer-logo.png" alt="" /></a>
                    </div>
                    <div class="text">
                      <?= $lang['describ']; ?>
                    </div>
                    <a href="/coreasusa/contact?lang=<?= $lang['language']; ?>" class="theme-btn about-btn">
                      <?= $lang['contact']; ?>
                    </a>
                  </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget newsletter-widget">
                    <h4>
                      <?= $lang['newsletter']; ?>
                    </h4>
                    <div class="text">
                      <?= $lang['news-text']; ?>
                    </div>

                    <!-- Email Box -->
                    <div class="email-box">
                      <form method="post" action="contact.html">
                        <div class="form-group">
                          <input type="email" name="search-field" value="" placeholder="<?= $lang['email-text'] ?>"
                            required>
                          <button type="submit"><span class="icon flaticon-send"></span></button>
                        </div>
                      </form>
                    </div>

                    <!-- Social Box -->
                    <ul class="social-box">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-linkedin"></a></li>
                      <li><a href="#" class="fa fa-youtube"></a></li>
                    </ul>
                    <!-- End Social Box -->

                  </div>
                </div>

              </div>
            </div>

            <!-- Big Column -->
            <div class="big-column col-lg-6 col-md-12 col-sm-12">
              <div class="row clearfix">

                <!-- Footer Column -->
                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget contact-widget">
                    <h4>
                      <?= $lang['address-info']; ?>
                    </h4>
                    <ul class="contact-list">
                      <li><span class="icon fa fa-phone"></span> + (781)521-0234 <br>
                        + (617)447-9325</li>
                      <li><span class="icon fa fa-envelope"></span> 240 Zone Industrielle Zenata-Casablanca</li>
                    </ul>
                    <div class="timing">
                    </div>
                  </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget instagram-widget">
                    <h4>
                      <?= $lang['media']; ?>
                    </h4>
                    <div class="widget-content">
                      <div class="images-outer clearfix">
                        <!--Image Box-->
                        <figure class="image-box"><a class="lightbox-image" href="#"><img
                              src="/coreasusa/public/img/gallery/footer-1.jpg" alt=""></a></figure>
                        <!--Image Box-->
                        <figure class="image-box"><a class="lightbox-image" href="#"><img
                              src="/coreasusa/public/img/gallery/footer-2.jpg" alt=""></a></figure>
                        <!--Image Box-->
                        <figure class="image-box"><a class="lightbox-image" href="#"><img
                              src="/coreasusa/public/img/gallery/footer-3.jpg" alt=""></a></figure>
                        <!--Image Box-->
                        <figure class="image-box"><a class="lightbox-image" href="#"><img
                              src="/coreasusa/public/img/gallery/footer-4.jpg" alt=""></a></figure>
                        <!--Image Box-->
                        <figure class="image-box"><a class="lightbox-image" href="#"><img
                              src="/coreasusa/public/img/gallery/footer-5.jpg" alt=""></a></figure>
                        <!--Image Box-->
                        <figure class="image-box"><a class="lightbox-image" href="#"><img
                              src="/coreasusa/public/img/gallery/footer-6.jpg" alt=""></a></figure>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="footer-bottom">
          <div class="copyright">&copy; 2024 Coreasusa - All rights reserved. <a href="#">Coreasusa</a></div>
        </div>

      </div>
    </footer>

  </div>
</body>

</html>