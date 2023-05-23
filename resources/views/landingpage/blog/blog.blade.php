@extends('landingpage.layout')

@section('content')

      {{-- Foto Awal --}}
      <div class="col-lg-12">
        <center><img src="{{ asset('LandingPage-Template/assets/img/Team.jpeg') }}" ></center>
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
                <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pengarahan Satuan Pengamanan</h4>
                  <p>PLN UIW KSKT</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/blog/pelatihan1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pengarahan Satuan Pengamanan"><i class="bx bx-plus"></i></a>
                  <a href="Pelatihan1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/blog/event1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>GM UID KSKT Menyapa</h4>
                  <p>Banjarmasin</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/blog/event1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="GM UID KSKT Menyapa"><i class="bx bx-plus"></i></a>
                  <a href="Rekrutmen1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelatihan Binsik Satpam</h4>
                  <p>PLN UIW KSKT</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/blog/pelatihan2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan Binsik Satpam PT Yaza Pratama"><i class="bx bx-plus"></i></a>
                  <a href="Pelatihan2" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/blog/event2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pemberian Arahan Manager Adumfas PLN UIW KSKT</h4>
                  <p>PLN Wilayah Kalimantan Selatan dan Tengah</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/blog/event2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pemberian Arahan Manager Adumfas PLN UIW KSKT"><i class="bx bx-plus"></i></a>
                  <a href="Rekrutmen2" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/blog/event3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Koordinasi Dengan User Suzuki</h4>
                  <p>Banjarmasin</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/blog/event3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Koordinasi Dengan User Suzuki"><i class="bx bx-plus"></i></a>
                  <a href="Rekrutmen3" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelatihan Binsik Satpam</h4>
                  <p>PLN UDPL Banjarbaru</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/blog/pelatihan3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan Binsik Satpam PT Yaza Pratama"><i class="bx bx-plus"></i></a>
                  <a href="Pelatihan3" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection