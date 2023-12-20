<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Petal's <span> <br>E-Commerce &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= Yii::$app->getHomeUrl(); ?>assets/img/bg.jpg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->





<!-- ======= Tentang Section ======= -->
<section id="about" class="about section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3>Tentang</h3>
    </div>
    <div class="row">
    <?php foreach ($model as $key => $val) :?>
      
        <div class="member">
          <div class="member-info">
            <div class="member-info-content">
            <span><p align="center"><?= $val->isi ?></p></span>
            </div>
          </div>
        </div>
      
      <?php endforeach; ?>
  </div>
</section><!-- End Tentang Section -->

<!-- ======= Jenis Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>Petal's</h3>
      <p>Kini pesan bunga menjadi lebih mudah dengan layanan flower delivery dari Petal's, 
        khususnya bagi Anda yang bertempat di Padang. Toko bunga online Petal's hadir untuk 
        memberikan kemudahan pesan bunga secara online dan kami siap mengantarkan pesanan bunga ke lokasi tujuan.
      </p>
      
      
    </header>    

    <div class="row g-5">
    <?php foreach ($modelJenis as $key => $val) :?>
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
        <div class="box">
          <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
          <h4 class="title"><a href=""><?= $val->nama ?></a></h4>
          <p class="description"><?= $val->desc ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  </div>
</section><!-- End Jenis Section -->

<!-- ======= Produk Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3>Produk</h3>
    </div>
    

    <div class="row">
    <?php foreach ($modelProduk as $key => $val) :?>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="<?= Url::toRoute(['../../backend/web/uploads_image/' . $val->img])?>" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
            <span><h4><?= $val->harga ?></h4></span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
  </div>
</section><!-- End Produk Section -->

<!-- ======= Portfolio Testimoni  ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3 class="section-title">Testimoni</h3>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*"class="filter-active">All</li>
          <li data-filter=".filter-bunga">Bunga</li>
          <li data-filter=".filter-snack">Snack</li>
          <li data-filter=".filter-uang">Uang</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

     <?php foreach ($modelTestyBunga as $key => $val) :?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-bunga">
        <div class="portfolio-wrap">
          <img src="<?= Url::toRoute(['../../backend/web/uploads_image/' . $val->img])?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <p><?= $val->nama ?></p>
            <p><?= $val->desc ?></p>
            <div>
              <a href="<?= Url::toRoute(['../../backend/web/uploads_image/' . $val->img])?>" data-gallery="portfolioGallery" title="<?= $val->desc ?>" class="link-preview portfolio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

      <?php foreach ($modelTestySnack as $key => $val) :?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-snack">
        <div class="portfolio-wrap">
          <img src="<?= Url::toRoute(['../../backend/web/uploads_image/' . $val->img])?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <p><?= $val->nama ?></p>
            <p><?= $val->desc ?></p>
            <div>
              <a href="<?= Url::toRoute(['../../backend/web/uploads_image/' . $val->img])?>" data-gallery="portfolioGallery" title="<?= $val->desc ?>" class="link-preview portfolio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      
      <?php foreach ($modelTestyUang as $key => $val) :?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-uang">
        <div class="portfolio-wrap">
          <img src="<?= Url::toRoute(['../../backend/web/uploads_image/' . $val->img])?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <p><?= $val->nama ?></p>
            <p><?= $val->desc ?></p>
            <div>
              <a href="<?= Url::toRoute(['../../backend/web/uploads_image/' . $val->img])?>" data-gallery="portfolioGallery" title="<?= $val->desc ?>" class="link-preview portfolio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
     
    </div>

  </div>
</section><!-- End Portfolio Section -->
