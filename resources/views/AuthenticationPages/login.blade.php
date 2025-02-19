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

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">{{ config('app.nama_app') }}</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                    <p class="text-center small">Gunakan email dan password yang terdaftar.</p>
                  </div>

                  <form action="{{ route('login_process') }}" class="row g-3 needs-validation" novalidate method="POST">
                    @csrf
                    <div class="col-12">
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                        <input type="email" name="email" class="form-control" id="yourEmail" required placeholder="Masukkan Email">
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" name="password" class="form-control" id="yourPassword" required placeholder="Masukkan Password">
                            <span class="input-group-text" onclick="togglePassword()">
                                <i id="toggleIcon" class="bi bi-eye"></i>
                            </span>
                            <div class="invalid-feedback">Please enter your Password.</div>
                        </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12 text-center mt-4">
                      <p class="small mb-0 text-secondary">Tidak Memiliki Hak Akses? Hubungi HRD atau pengembang untuk mendapatkan bantuan</p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                {{-- Developed by <a href="https://github.com/FarisIftikharAlfarisi"><span>Faris Iftikhar Alfarisi</span></a> --}}
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
   <script>
    function togglePassword() {
        var passwordField = document.getElementById("yourPassword");
        var toggleIcon = document.getElementById("toggleIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove("bi-eye");
            toggleIcon.classList.add("bi-eye-slash");
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove("bi-eye-slash");
            toggleIcon.classList.add("bi-eye");
        }
    }
    </script>

</body>

</html>
