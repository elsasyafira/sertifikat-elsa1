<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/'); ?>/img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/'); ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
<!--  -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

      
        <li class="nav-item dropdown">

           
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
  <a class="nav-link " href="<?= base_url('home'); ?>">
    <i class="bi bi-grid"></i>
    <span>Dashboard</span>
  </a>
</li><!-- End Dashboard Nav -->



<li class="nav-item">
  <a class="nav-link collapsed" href="<?= base_url('event'); ?>">
    <i class="bi bi-envelope"></i>
    <span>events</span>
  </a>
</li><!-- End Contact Page Nav -->

<li class="nav-item">
  <a class="nav-link collapsed" href="<?= base_url('sertifikat'); ?>">
    <i class="bi bi-card-list"></i>
    <span>sertifikat</span>
  </a>
</li><!-- End Register Page Nav -->

<li class="nav-item">
  <a class="nav-link collapsed" href="<?= base_url('generate'); ?>">
    <i class="bi bi-box-arrow-in-right"></i>
    <span>generate</span>
  </a>
</li><!-- End Login Page Nav -->





</ul>




  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">sertifikat</h5>
              <p><a href="<?= base_url('sertifikat/tambah_sertifikat');?>" target="_blank">tambah sertifikat </a> <code></code> </p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">certificate_id</th>
                    <th scope="col">participant_name</th>
                    <th scope="col">event_name</th>
                    <th scope="col">event-date</th>
                    <th scope="col">certificate_text</th>
                    <th scope="col">created_at</th>
                  </tr>
                </thead>
                <tbody>
                 

                  <tr>
                   
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy;<strong><span>sertifikat_online</span></strong>.
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     <a href="https://bootstrapmade.com/">elsa</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assest/'); ?>/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url('assets/'); ?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/'); ?>/js/main.js"></script>

</body>

</html>