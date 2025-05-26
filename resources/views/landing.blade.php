<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SportEase</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/sportease3.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a class="logo d-flex align-items-center me-auto" style="pointer-events: none;">  
        <img src="{{ asset('assets/img/sporteasebaru2.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#kegiatan">Kegiatan</a></li>
          <li><a href="#alamat">Alamat</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="cta-btn d-none d-sm-block" href="/admin">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="hero-overlay"></div>
      <img src="{{ asset('assets/img/olahraga14.jpg') }}" alt="" data-aos="fade-in">

      <!-- Logo Tro tidak jadi karena ngezoom jadi besar, tapi css udah-->
       <!-- <img src="{{ asset('assets/img/koni.jpeg') }}" alt="Logo Koni" class="koni-logo"> -->

      <div class="container d-flex flex-column align-items-center text-center mt-auto">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">SportEase<br>KONI NGANJUK</h2>        
      </div>

      <div class="about-info mt-auto position-relative">
        <div class="container position-relative" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6">
              <h2>Tentang Koni Nganjuk</h2>
              <p>Selamat Datang di Web KONI Kabupaten Nganjuk</p>
              <p>Komite Olahraga Nasional Indonesia (KONI) adalah satu-satunya organisasi yang berwenang dan bertanggung jawab mengelola, membina, mengembangkan & mengkoordinasikan seluruh pelaksanaan kegiatan olahraga prestasi setiap anggota di Indonesia.</p>
            </div>
          </div>
        </div>
      </div>


    </section><!-- /Hero Section -->

    <!-- Events Mulai -->
    <section id="events" class="speakers section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Event Olahraga<br></h2>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/bminton1.jpeg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/bminton1.jpeg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="event-detail.blade.php">Bulu Tangkis</a></h4>
                  <span>Senin, 1 Juni 2025</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/basket6.jpg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/basket6.jpg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="speaker-details.html">Basket</a></h4>
                  <span>Selasa, 2 Juni 2025</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/futsal1.jpeg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/futsal1.jpeg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="speaker-details.html">Futsal</a></h4>
                  <span>Rabu, 3 Juni 2025</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/voly1.jpeg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/voly1.jpeg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="speaker-details.html">Voli</a></h4>
                  <span>Kamis, 4 Juni 2025</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        
        </div>
        </div>
        </div>
        </div>
      </div>

    </section><!-- Events Selesai -->

    <!-- Kegiatan Mulai -->
    <section id="kegiatan" class="speakers section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kegiatan Olahraga<br></h2>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/karate2.jpeg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/karate2.jpeg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="speaker-details.html">Karate</a></h4>
                  <span>Sabtu dan Minggu</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/boxing2.jpeg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/boxing2.jpeg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="speaker-details.html">Boxing</a></h4>
                  <span>Rabu dan Jum'at</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        
        
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/btangkis2.jpeg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/btangkis2.jpeg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="speaker-details.html">Bulu Tangkis</a></h4>
                  <span>Selasa dan Kamis</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        
        
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <a href="{{ asset('assets/img/futsal2.jpeg') }}" class="glightbox" data-gallery="speakers-gallery">
                <img src="{{ asset('assets/img/futsal2.jpeg') }}" class="img-fluid" alt="">
              </a>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><a href="speaker-details.html">Futsal</a></h4>
                  <span>Minggu dan Selasa</span>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        
        </div>
        </div>
        </div>
        </div>
      </div>

    </section><!-- Kegiatan Selesai -->


    <!-- Alamat Mulai -->
<section id="alamat" class="venue section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Alamat<br></h2>
    <p>Jl. DR. Soetomo No.60, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64418</p>
  </div><!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up">
    <div class="row g-0">
        <div class="col-lg-12 text-center">
            <iframe 
                src="{{ $alamat['map_url'] }}" 
                frameborder="0" 
                style="border:0; width: 70%; height: 400px;" 
                allowfullscreen 
                class="mx-auto d-block">
            </iframe>
        </div>
    </div>
</div>

</section><!-- Alamat Selesai -->



  </main>

  <footer id="footer" class="footer dark-background">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">SportEase</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Upcoming Events</p>
              <p>Nganjuk</p>
              <p class="mt-3"><strong>Phone:</strong> <span>0852 4284 9310</span></p>
              <p><strong>Email:</strong> <span>natanlaptop8@gmail.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Alamat</h4>
            <p>SEKERTARIAT : GEDUNG JUANG 45</p>
            <p>JL.DR.SUTOMO NO.60, NGANJUK,JAWATIMUR 64418</p>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Kontak</h4>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
        <div>© <strong><span>SportEase</span></strong></div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">SportEase</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
