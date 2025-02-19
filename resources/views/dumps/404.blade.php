<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('DashboardTemplates/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('DashboardTemplates/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('DashboardTemplates/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  {{-- <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet"> --}}
  {{-- <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> --}}
  <link href="{{ asset('DashboardTemplates/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('DashboardTemplates/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
          <img src="{{ asset('DashboardTemplates/assets/img/not-found.svg') }}" class="img-fluid py-5" style="width: 18rem" alt="Page Not Found">
        <h1>404</h1>
        <h2>Halaman yang anda dari tidak ditemukan.</h2>
        <a class="btn" href="javascript:window.history.back();"> <i class="bi bi-arrow-left"></i> Kembali Kehalaman Sebelumnya</a>
        <div class="credits">

          {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
        </div>
      </section>

    </div>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('DashboardTemplates/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('DashboardTemplates/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('DashboardTemplates/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('DashboardTemplates/assets/vendor/echarts/echarts.min.js') }}"></script>
  {{-- <script src="assets/vendor/quill/quill.js"></script> --}}
  <script src="{{ asset('DashboardTemplates/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  {{-- <script src="assets/vendor/tinymce/tinymce.min.js"></script> --}}
  <script src="{{ asset('DashboardTemplates/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('DashboardTemplates/assets/js/main.js') }}"></script>

</body>

</html>
