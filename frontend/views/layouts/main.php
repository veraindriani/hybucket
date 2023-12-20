<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Petal's</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/img/icon.jpg" rel="icon">
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= Yii::$app->getHomeUrl(); ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Rapid - v4.7.1
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php $this->beginBody() ?>

<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#hero">Petal's</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Jenis</a></li>
          <li><a class="nav-link scrollto" href="#team">Produk</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Testimoni</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
                    <a href="https://www.instagram.com/hy_buckett_florist/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6 ">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h4>Petal's</h4>
                  <p> Memilih kado terbaik untuk orang yang kamu sayangi tidak harus sulit. 
                    Kami memastikan kamu dapat membeli bunga terbaik dengan mudah dan cepat</p>
                </div>

              </div>
              

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Jenis</a></li>
                    <li><a href="#team">Produk</a></li>
                    <li><a href="#portfolio">Testimoni</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         <div class="col-lg-6">
          <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                      ESTABLISHED SINCE 2022 <br>
                    <strong>Phone:</strong> 0822 8585 1382 <br>
                    <strong>Shopee:</strong> shopee.co.id/hybucket088<br>
                    <strong>Instagram:</strong> @hy_bucket_florist<br>
                  </p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>2022</strong>. Petal's
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>assets/js/main.js"></script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
