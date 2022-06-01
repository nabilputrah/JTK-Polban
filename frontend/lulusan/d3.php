<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Study Tracer D3 | Politeknik Negeri Bandung</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <!--- kosong -->
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <input class="form-control form-control-sm" type="text" placeholder="Search" >
        <a href="#" class="facebook"><i class="bi bi-search"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <div class="container d-flex align-items-center">
        <a href="../index.php" class="logo"><img src="../assets/img/logo_polban.png" alt=""></a>
        <h1 class="logo" style="margin-left: 15px;"><a href="../index.php">Portal JTK<span>.</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="../index.php">Beranda</a></li>
          <li><a class="nav-link" href="../profil/profil-jurusan.php">Tentang JTK</a></li>
          <li><a class="nav-link" href="../kurikulum/d3-2016.php">Akademik</a></li>
          <li><a class="nav-link" href="../mitra/arsip-kerja-sama.php">Mitra</a></li>
          <li><a class="nav-link active" href="d3.php">Lulusan</a></li>
          <li class="dropdown"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../berita/berita_home.php">Berita</a></li>
              <li><a href="../fasilitas/fasilitas.php">Fasilitas</a></li>
              <li><a href="../event/event_home.php">Event</a></li>
              <li><a href="../galeri/galeri.php">Galeri</a></li>
              <li class="dropdown"><a href="#"><span>Prestasi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="../prestasi/mahasiswa-berprestasi.php">Mahasiswa Berprestasi</a></li>
                  <li><a href="../prestasi/penghargaan.php">Penghargaan</a></li>
                  <li><a href="../prestasi/program-kreativitas-mahasiswa.php">Pekan Kreativitas Mahasiswa</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Pegawai</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="../pegawai/daftar_dosen.php">Dosen</a></li>
                  <li><a href="../pegawai/daftar_pegawai.php">Lainnya</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Slider Section ======= -->
  <section id="hero" style="background-attachment: relative;" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1 id="judul_utama" class="d-flex justify-content-center">Lulusan<span>-D3</span></h1>
    </div>
  </section><!-- End Slider -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Lulusan D3 - Tracer Study</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Lulusan D3</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="section-title">
          <h2 style="color: orange;">D3 Teknik Informatika</h2>
          <a href="d4.php"><h2>D4 Teknik Informatika</h2></a>
        </div>
        <p>
          <h3>Grafik Tingkat Kelulusan</h3>
          <h7>Tingkat Kelulusan dari D3 Teknik Informatika Politeknik Negeri Bandung, data yang didapat berasal dari jumlah mahasiswa yang lulus angkatan 2019.</h7>
          <div class="d-flex justify-content-between align-items-center">
            <div id="plotLulus" class="align-items-center" style="width:100%;max-width:700px"></div>
          </div>
          <hr>
          <h3>Grafik Tracer Study</h3>
          <h7>Tracer Study dari D3 Teknik Informatika Politeknik Negeri Bandung, data yang didapat berasal dari jumlah mahasiswa yang lulus angkatan 2019.</h7>
          <div class="d-flex justify-content-between align-items-center">
            <div id="plotTracer" class="align-items-center" style="width:100%;max-width:700px"></div>
          </div>
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top" style="background-color: #105194;">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-8 footer-contact">
            <h3 style="color: white;">JTK - <span>POLBAN</span></h3>
            <p style="color: white;">
              Jl. Gegerkalong Hilir, Ds. Ciwaruga<br>
              Bandung 40559, Kotak Pos 1234<br>
              Jawa Barat<br><br>
              <strong>Phone:</strong> (022) 2013789 ext. 301<br>
              <strong>Email:</strong> jtk@polban.ac.id<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-8 footer-links">
            <h4 style="color: white;">Tautan Pintasan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: white;">Agenda Jurusan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: white;">Berita Jurusan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: white;">Kerja Sama</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: white;">Himpunan Mahasiswa Komputer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: white;">Politeknik Negeri Bandung</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-8 footer-links">
            <h4 style="color: white;">Media Sosial</h4>
            <p style="color: white;">Media Sosial yang Dimiliki dan Dikelola oleh</p>
            <p style="color: white;">Jurusan Teknik Komputer dan Informatika - POLBAN</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>2012—2022</span></strong> Jurusan Teknik Komputer dan Informatika Politeknik Negeri Bandung.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade and BizLand.</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Plot -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>

<script>
  var web_strapi = "http://localhost:1337";

  window.onload = callFunc();

  function callFunc(){
    plotLulus();
    plotTracer();
  }

  async function plotLulus(){
    // fetch data
    let response = await fetch(web_strapi + '/tracerstudies/628f46bb09a9cf11c0ac6bfe');
    let result = await response.json();

    var xArray = ["Lulus Tepat Waktu", "Lulus Tidak Tepat Waktu", "Tidak Lulus"];
    var yArray = [parseInt(result.lulus), parseInt(result.lulus_tidaktepat), parseInt(result.tidak_lulus)];

    var data = [{
      x:xArray,
      y:yArray,
      type:"bar",
      marker: {
        color: 'red'
      }
    }];

    var layout = {};

    Plotly.newPlot("plotLulus", data, layout);
  }

  async function plotTracer(){
    // fetch data
    let response = await fetch(web_strapi + '/tracerstudies/628f46bb09a9cf11c0ac6bfe');
    let result = await response.json();

    var xArray = ["Bekerja", "Melanjutkan Study", "Wirausaha", "Tidak Bekerja", "Belum Diketahui"];
    var yArray = [parseInt(result.bekerja), parseInt(result.melanjutkan_study), parseInt(result.wirausaha), parseInt(result.tidak_bekerja), parseInt(result.belum_diketahui)];

    var data = [{
      x:xArray,
      y:yArray,
      type:"bar"
    }];

    var layout = {};

    Plotly.newPlot("plotTracer", data, layout);
  }
  
</script>