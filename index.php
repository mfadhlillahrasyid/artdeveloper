<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?php
        $p = 'home';
        if(isset($_GET['page'])) {
          $p = $_GET['page'];
        } 
        if ($p == 'home') {
          echo "Art Developer Digital Agency";
        } else if ($p == 'about-us') {
          echo "Tentang Kami";
        } else if ($p == 'contact-us') {
          echo "Hubungi Kami";
        } else if ($p == 'our-portfolio') {
          echo "Study Case";
        } else if ($p == 'blog') {
          echo "Blog";
        } else if ($p == 'services/performance-advertising') {
          echo "Performance Advertising";
        }
      ?>
    </title>
  <meta content="Hello World Digital Agency hadir dengan Layanan Digital terkini untuk membantu Bisnis anda Bertumbuh" name="description">
  <meta content="digital service, 
    digital agency, 
    digital marketing agency, 
    seo, 
    search engine optimization,
    search engine marketing, 
    advertising, 
    iklan digital,
    google ads, facebook ads, meta ads, instagram ads, tiktok ads, 
    jasa pembuatan website profesional, 
    sosial media management service, 
    layanan pembuatan aplikasi web, 
    jasa digital profesional, 
    layanan digital terkini, 
    layanan ui ux, 
    layanan design grafis, 
    branding, 
    menaikkan brand dengan cepat, 
    " name="keywords">

    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/edited.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        !function (w, d, t) {
        w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

        ttq.load('CHQCM8RC77U2H86LQDT0');
        ttq.page();
        }(window, document, 'ttq');
    </script>

</head>

    <body><!-- class="disable-select" oncopy="return false" oncut="return false" onpaste="return false" -->
      
    <?php include 'src/links.php'; ?>
    <?php include 'src/support.php'; ?>

    <script>
        !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
        })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "<?php echo $pixel; ?>");
        fbq("track", "PageView");
        fbq("track", "ViewContent");
    </script>
    <noscript><img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=<?php echo $pixel; ?>&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <script>
        function ATC() {
        fbq("track", "Contact");
        }
    </script>
    
    <header id="header" class="header d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="javascript:void(0);" value="Reload Page" onClick="window.location.reload()" class="logo d-flex align-items-center">
          <img src="assets/img/logo-up.png" class="img-fluid" alt="logo Header Art Developer">
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="<?php echo $home; ?>">Home</a></li>
            <li><a href="<?php echo $about; ?>">About</a></li>
            <!-- <li><a href="<?php echo $about; ?>">Services</a></li> -->
            <li class="dropdown"><a href="javascript:void(0);"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <!-- <li class="dropdown"><a href="javascript:void(0);"><span>Performance Marketing</span> &nbsp;<i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="<?php echo $service_1; ?>">Digital Advertising</a></li>
                    <li><a href="#">Marketplace Optimization</a></li>
                    <li><a href="#">Social Media Management</a></li>
                  </ul>  
                </li>
                <li class="dropdown"><a href="javascript:void(0);"><span>Digital Development</span> &nbsp;<i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Website Development</a></li>
                    <li><a href="#">Web Applications</a></li>
                    <li><a href="#">Digital Product Design</a></li>
                  </ul>  
                </li>
                <li class="dropdown"><a href="javascript:void(0);"><span>Bussiness Branding</span> &nbsp;<i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Logo Branding</a></li>
                    <li><a href="#">Digital Design</a></li>
                  </ul>  
                </li> -->
                <li><a href="<?php echo $service_1; ?>">Performance Advertising</a></li>
                <li><a href="#">Marketplace Optimization</a></li>
                <li><a href="#">Social Media Management</a></li>
                <li><a href="#">Website Development</a></li>
                <li><a href="#">Web Application Programs</a></li>
                <li><a href="#">Digital Product Design</a></li>
                <li><a href="#">Logo Branding Design</a></li>
                <li><a href="#">Graphic Design Services</a></li>
              </ul>
            </li>
            <li><a href="#">Study Case</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </nav><!-- .navbar -->
        <div class="btn-nav d-flex align-items-center">
          <ul>
            <li><a href="#">Login</a></li>
            <li class="login-nav"><a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Get Started</a></li>
          </ul>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header><!-- End Header -->

    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Art Developer Digital Agency &trade;</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="img-offcanvas col-lg-12">
          <img src="assets/img/about/1.png" class="img-fluid" alt="">
        </div>
        <p>Art Developer hadir untuk membangun bisnis anda menjadi lebih berkembang, membimbing anda sepenuh hati layaknya Team anda sendiri. Kami mampu bersaing dengan Agensi digital lainnya karena kami Mampu dan anda yang Mempercayakan Layanan kami Sepenuhnya</p>
        <p>Art Developer menghadirkan solusi terkini untuk anda yang sedang menghadapi dunia bisnis yang telah berkembang pesat. Kami Hadirkan Layanan yang sudah banyak digandrungi di Dunia Digital</p>
      </div>
    </div>
  <!-- End Header -->
      
  <?php
    if(isset($_GET['page'])) {
      $ref = $_GET['page'];

        switch($ref) {
          case 'home':
            include "public/home.php";
            break;

          case 'about-us':
            include "public/about.php";
            break;

          case 'contact-us':
            include "public/contact.php";
            break;

          case 'our-portfolio':
            include "public/port.php";
            break;

          case 'blog':
            include "public/blog.php";
            break;

          case 'services/performance-advertising':
            include "public/services/service-01.php";
            break;
        
      default: 
        http_response_code(404);
        echo "404";
        break;
      }
    } else {
      include "public/home.php";
    }
  ?>
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top" data-aos="fade-in">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-in">
            <img src="assets/img/logo-down.png" alt="">
            <p>
              Medan, Sumatera Utara<br>
              Indonesia<br>
              <strong>Phone :</strong> <a href="https://api.whatsapp.com/send?text=Halo%20ArtDev,%20Saya%20ingin%20Konsultasi%20Layanan%20Dengan%20Anda%20&phone=6281260779669">0812-6077-9669</a><br>
              <strong>Email :</strong> <a href="mailto:artdeveloper.tech@gmail.com?subject=Halo ArtDev, saya ingin konsultasi">artdeveloper.tech@gmail.com</a><br>
            </p>
            <div class="social-links">
              <a href="<?php echo $fp; ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="<?php echo $ig; ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="<?php echo $lk; ?>" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
              <a href="<?php echo $tt; ?>" class="tiktok" target="_blank"><i class="bi bi-tiktok"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-in">
            <h4>Services</h4>
            <ul>
              <li><a href="<?php echo $service_1; ?>">Performance Ads</a></li>
              <li><a href="#">Website Development</a></li>
              <li><a href="#">Digital Design Branding</a></li>
              <li><a href="#">Marketplace Advertising</a></li>
              <li><a href="#">Website App</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-in">
            <h4>Links</h4>
            <ul>
              <li><a href="<?php echo $about; ?>">Tentang Art Developer</a></li>
              <li><a href="<?php echo $port; ?>">Our Portfolio</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-blog" data-aos="fade-in">
            <h4>Our Popular Article</h4>
            <ul>
              <li><img src="assets/img/blog/blog-01/banner.webp" alt=""><a href="<?php echo $blog_01; ?>">Pentingnya Digital Marketing untuk Bisnis di Era Pandemi</a></li>
              <li><img src="assets/img/blog/blog-02/banner.webp" alt=""><a href="<?php echo $blog_02; ?>">Brand Guide penentu Bisnis anda dikenal oleh masyarakat</a></li>
              <li><img src="assets/img/blog/blog-03/banner.webp" alt=""><a href="#">Ciri-ciri Website yang Telah di Optimalisasi</a></li>
              <li><img src="assets/img/blog/blog-04/banner.webp" alt=""><a href="#">Cara Menggunakan SEO untuk Menaikkan Rangking Website</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">&copy; Copyright 2022 Art Developer&trade; - All Rights Reserved</div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script>
    document.addEventListener("contextmenu", function(e) {
      e.preventDefault();
    }, false);
  </script>   -->

</body>

</html>