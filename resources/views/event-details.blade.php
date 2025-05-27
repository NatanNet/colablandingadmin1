<!-- resources/views/event.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Speaker Details - TheEvent Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('images/favicon.png') }}" rel="icon">
  <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="speaker-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('images/logo.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#speakers">Speakers</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#hotels">Hotels</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="cta-btn d-none d-sm-block" href="#buy-tickets">Buy Tickets</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url('{{ asset('images/olahraga11.jpg ') }}');">
      <div class="container position-relative">
        <h1>Detail Events</h1>
        <p>Informasi lengkap events.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- event section -->
    <section id="events" class="events section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <!-- Kolom Gambar (sebelah kiri) -->
          <div class="col-md-6">
            <img src="{{ asset('images/speaker.jpg') }}" alt="Speaker" class="img-fluid">
          </div>

          <!-- Kolom Detail Event (sebelah kanan) -->
          <div class="col-md-6">
            <div class="event-details">
              <!-- Nama Event -->
              <h2 class="event-title">Nama Event: Festival Teknologi 2025</h2>

              <!-- Lokasi -->
              <p class="event-location"><strong>Lokasi:</strong> Jakarta Convention Center</p>

              <!-- Tanggal Mulai dan Selesai -->
              <p class="event-dates">
                <strong>Tanggal Mulai:</strong> 1 Januari 2025<br>
                <strong>Tanggal Selesai:</strong> 5 Januari 2025
              </p>

              <!-- Deskripsi Event -->
              <p class="event-description">
                <strong>Deskripsi:</strong> Festival Teknologi 2025 adalah acara terbesar yang akan mempertemukan inovator, pengusaha, dan profesional dari berbagai bidang untuk berbagi pengetahuan tentang teknologi terbaru. Acara ini mencakup seminar, pameran teknologi, dan jaringan industri yang menarik. Jangan lewatkan kesempatan untuk menjadi bagian dari acara inspiratif ini!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end event section -->

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
