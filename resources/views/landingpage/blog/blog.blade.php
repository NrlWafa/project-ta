@extends('landingpage.layout')

@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="/">PT Yaza Pratama</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto active" href="Blog">Blog</a></li>
                    <li><a class="nav-link scrollto" href="Layanan">Layanan</a></li>

                    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="profil-perusahaan">Profil Perusahaan</a></li>
                            <li><a class="nav-link scrollto" href="formasi-pekerjaan">Formasi Pekerjaan</a></li>
                            <li><a class="nav-link scrollto" href="Galeri">Galeri</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="Kontak">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="https://www.facebook.com/groups/507934266239777" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/yaza_pratama/" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </header><!-- End Header -->

    {{-- Foto Awal --}}
    <div class="col-lg-12">
        <center><img src="{{ asset('LandingPage-Template/assets/img/Team.jpeg') }}"></center>
    </div>


    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Blog</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-card">Event</li>
                        <li data-filter=".filter-web">Pelatihan</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Pengarahan Satuan Pengamanan</h4>
                            <p>PLN UIW KSKT</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="{{ asset('LandingPage-Template/assets/img/blog/pelatihan1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"
                                title="Pengarahan Satuan Pengamanan"><i class="bx bx-plus"></i></a>
                            <a href="Pelatihan1" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('LandingPage-Template/assets/img/blog/event1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>GM UID KSKT Menyapa</h4>
                            <p>Banjarmasin</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="{{ asset('LandingPage-Template/assets/img/blog/event1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="GM UID KSKT Menyapa"><i
                                    class="bx bx-plus"></i></a>
                            <a href="Rekrutmen1" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Pelatihan Binsik Satpam</h4>
                            <p>PLN UIW KSKT</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="{{ asset('LandingPage-Template/assets/img/blog/pelatihan2.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"
                                title="Pelatihan Binsik Satpam PT Yaza Pratama"><i class="bx bx-plus"></i></a>
                            <a href="Pelatihan2" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('LandingPage-Template/assets/img/blog/event2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Pemberian Arahan Manager Adumfas PLN UIW KSKT</h4>
                            <p>PLN Wilayah Kalimantan Selatan dan Tengah</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="{{ asset('LandingPage-Template/assets/img/blog/event2.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"
                                title="Pemberian Arahan Manager Adumfas PLN UIW KSKT"><i class="bx bx-plus"></i></a>
                            <a href="Rekrutmen2" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('LandingPage-Template/assets/img/blog/event3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Koordinasi Dengan User Suzuki</h4>
                            <p>Banjarmasin</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="{{ asset('LandingPage-Template/assets/img/blog/event3.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"
                                title="Koordinasi Dengan User Suzuki"><i class="bx bx-plus"></i></a>
                            <a href="Rekrutmen3" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Pelatihan Binsik Satpam</h4>
                            <p>PLN UDPL Banjarbaru</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="{{ asset('LandingPage-Template/assets/img/blog/pelatihan3.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"
                                title="Pelatihan Binsik Satpam PT Yaza Pratama"><i class="bx bx-plus"></i></a>
                            <a href="Pelatihan3" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
