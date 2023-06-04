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
            <li><a class="nav-link scrollto" href="Blog">Blog</a></li>
            <li><a class="nav-link scrollto" href="Layanan" >Layanan</a></li>

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
          <a href="https://www.facebook.com/groups/507934266239777" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/yaza_pratama/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
      </div>
    </header><!-- End Header -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2></h2>
            <h2>Sertifikat</h2>
            <p>Sertifikat ini adalah hasil dari komitmen dan dedikasi PT Yaza Pratama dalam memberikan kualitas terbaik kepada klien. Kami memastikan bahwa layanan yang ada telah memenuhi standar yang ketat guna memberikan kepuasan maksimal kepada klien Kami.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in">
                <div class="pic"><img src="{{ asset('LandingPage-Template/assets/img/galeri/Penghargaan1.png') }}" class="img-fluid" alt=""></div>
                       <div class="member-info">
                  <h4>ISO 9001:2015</h4>
                  <span>VRC INTERNATIONAL</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{ asset('LandingPage-Template/assets/img/galeri/Penghargaan2.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>ISO 14001:2015</h4>
                  <span>VRC INTERNATIONAL</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{ asset('LandingPage-Template/assets/img/galeri/Penghargaan3.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>ISO 45001:2018</h4>
                  <span>VRC INTERNATIONAL</span>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->


       <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Galeri</h2>
            
          </div>
  
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-card">SDM</li>
                <li data-filter=".filter-web">Event</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/galeri/event1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Peduli Bencana Banjir</h4>
                  <p>Barabai</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/galeri/event1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pembagian Bantuan dari Direktur PT Yaza Pratama, Ibu Kumala Sari, kepada karyawannya yang berada di Barabai."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/galeri/sdm1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kunjungan Direktur Utama PT Yaza Pratama</h4>
                  <p>PLN UPDL Banjarbaru</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/galeri/sdm1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kunjungan Direktur Utama PT Yaza Pratama, Ibu Kumala Sari, ke PLN UPDL Banjarbaru dalam rangka menjalin silahturahmi, baik dengan user dan juga bertemu dengan teman-teman tenaga alih daya."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/galeri/event2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Audit BUJP Triwulan Ke-II</h4>
                  <p>PLN UID KSKT</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/galeri/event2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Audit BUJP Triwulan Ke-II Tahun 2023 di PLN UID KSKT bersama K3L."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/galeri/sdm2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Latihan Gabungan Binsik Satpam</h4>
                  <p>PLN Wilayah Kalimantan Selatan dan Tengah</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/galeri/sdm2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Latihan Gabungan Binsik Satpam PLN UID KSKT dan PLN UPDL Banjarbaru."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>

  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/galeri/event3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Latihan Rutin Satpam</h4>
                  <p>PLN Sektor Pembangkitan Barito</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/galeri/event3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Latihan Rutin Satpam PT Yaza Pratama yang bertugas di wilayah PLN Sektor Pembangkitan Barito."><i class="bx bx-plus"></i></a>                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/galeri/sdm3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kunjungan Rutin</h4>
                  <p>UP3 Barabai</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/galeri/sdm3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kunjungan rutin dari Koordinator PT Yaza Pratama, Bapak Robby Cahyadi, ke UP3 Barabai untuk briefing Satpam dan Cleaning Service."><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>

@endsection