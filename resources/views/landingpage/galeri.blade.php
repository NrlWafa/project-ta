@extends('landingpage.layout')

@section('content')

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