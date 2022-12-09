<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Papi Pyo - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Papi Pyo</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index2.php">Blog</a></li>
          <li><a href="single-post2.php">Single Post</a></li>
          <li><a href="about2.php">About</a></li>
          <li><a href="contact2.php">Contact</a></li>
          <li><a class="getstarted scrollto" href="logout.php">logout</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.php" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                    <div class="img-bg-inner">
                      <h2>Robert Holden</h2>
                      <p>"Your relationship with yourself sets the tone for every other relationship you have."</p>
                      <i class="bi bi-pencil-square fs-3"></i></div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                    <div class="img-bg-inner">
                      <h2>Hal Elrod</h2>
                      <p>"There is nothing to fear because you cannot fail. Only learn, grow and become tham you've ever been before."</p>
                      <i class="bi bi-pencil-square fs-3"></i></div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                    <div class="img-bg-inner">
                      <h2>Ericab Billups</h2>
                      <p>"Take me to the ocean. Let me sail the open sea. To breathe the warm and salty air and dreams of things to be."</p>
                      <i class="bi bi-pencil-square fs-3"></i></div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                    <div class="img-bg-inner">
                      <h2>Roy Croft</h2>
                      <p>"I love you not because of who you are, but because of who I am when I am with you."</p>
                      <i class="bi bi-pencil-square fs-3"></i></div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <a href="single-post.php"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"><i class="bi bi-pencil-square fs-3"></i></a>
              <h2><a href="single-post.php">Favorite Sport</a></h2>
              <p class="mb-4 d-block">I love playing and watching basketball. It is all because of the <b>Black Mamba Kobe Bryant</b>. The first player I idolize since I was a kid.</p>
            </div>

          </div>

          <div class="col-lg-8">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.php"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"><i class="bi bi-pencil-square fs-3"></i></a>
                  <h2><a href="single-post.php">My Pet Kyubert</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.php"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"><i class="bi bi-pencil-square fs-3"></i></a>
                  <h2><a href="single-post.php">Favorite Food</a></h2>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.php"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"><i class="bi bi-pencil-square fs-3"></i></a>
                  <h2><a href="single-post.php">Favorite Color</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.php"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"><i class="bi bi-pencil-square fs-3"></i></a>
                  <h2><a href="single-post.php">Hobby</a></h2>
                </div>
              </div>

<!-- Trending Section -->
<div class="col-lg-4">

  <div class="trending">
    <h3>Trending</h3>
    <ul class="trending-post">
      <li>
        <a href="single-post.php">
          <span class="number">1</span>
          <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
          <span class="author">Jane Cooper</span>
        </a>
      </li>
      <li>
        <a href="single-post.php">
          <span class="number">2</span>
          <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
          <span class="author">Wade Warren</span>
        </a>
      </li>
      <li>
        <a href="single-post.php">
          <span class="number">3</span>
          <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h3>
          <span class="author">Esther Howard</span>
        </a>
      </li>
</div> <!-- End Trending Section -->
</div>
</div>


        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Papi Pyo</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>