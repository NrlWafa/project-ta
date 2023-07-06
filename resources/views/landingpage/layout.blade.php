<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT Yaza Pratama - Penyedia Jasa Outsourcing</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('LandingPage-Template/assets/img/yazapratama_logo.png') }}" rel="icon">
    <link href="{{ asset('LandingPage-Template/assets/img/yazapratama.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('LandingPage-Template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('LandingPage-Template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('LandingPage-Template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('LandingPage-Template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('LandingPage-Template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('LandingPage-Template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('LandingPage-Template/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Scaffold
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @yield('content')



    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->

        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('LandingPage-Template/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('LandingPage-Template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('LandingPage-Template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('LandingPage-Template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('LandingPage-Template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('LandingPage-Template/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('LandingPage-Template/assets/js/main.js') }}"></script>
</body>


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>PT Yaza Pratama</h3>
                        <p>
                            Jalan Soetoyo S., Komplek Rajawali,<br>
                            No. 634, Teluk Dalam, Kota Banjarmasin<br><br>
                            <strong>Telepon:</strong> (0511)-3367428<br>
                            <strong>E-Mail:</strong> yaza_pratama@yahoo.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/groups/507934266239777" target="_blank"
                                class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/yaza_pratama/" target="_blank" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="Blog">Blog</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="Layanan">Layanan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="Kontak">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Profil</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="profil-perusahaan">Profil Perusahaan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="formasi-pekerjaan">Formasi Pekerjaan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="Galeri">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Terhubung Dengan Kami</h4>
                    <p>Kami memahami bahwa kritik dan saran konstruktif dapat membantu kami dalam meningkatkan kualitas
                        layanan dan operasional perusahaan.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright"> <strong><span>
                    Copyright &copy; By Hana Sayyida Fitri & Nurul Wafa - Politeknik Negeri
                    Banjarmasin</span></strong>
        </div>
    </div>
</footer><!-- End Footer -->
