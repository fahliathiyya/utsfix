<?php
require 'database/dbkoneksi.php'
?>

<?php 
   $sql = "SELECT * FROM motor";
   $motor = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MOTOROLA - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="frontend/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="frontend/template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Hidayah
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">MOTOROLA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="login/formlogin_admin.php">Login Admin</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://images.unsplash.com/photo-1473768961734-a7222f539688?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>MOTOROLA</span></h2>
              <p class="animated fadeInUp">MOTOROLA INDONESIA - Website jual beli motor terbesar se indonesia. Jaminan uang kembali jika barang tidak sesuai</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h3>Check our <span>Motor Collections</span></h3>
        </div>
        <div class="row portfolio-container justify-content-center">
          <div class="col-xl-10">
            <div class="row">
            <?php foreach($motor as $data) { ?>
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="<?=$data['gambar']?>" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><?=$data['nama_motor']?></h4>
                    <p>Rp.<?=$data['harga']?></p>
                    <div class="portfolio-links">
                      <a href="<?=$data['gambar']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                      <a href="frontend/view.php?id=<?=$data['id']?>" title="More Details">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
					<?php }?>
              <!-- End portfolio item -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MOTOROLA.co</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="frontend/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/template/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="frontend/template/assets/vendor/php-email-form/validate.js"></script>

  <!-- frontend/Template Main JS File -->
  <script src="frontend/template/assets/js/main.js"></script>

</body>

</html>