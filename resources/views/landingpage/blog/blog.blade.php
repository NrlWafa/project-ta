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
            <p>..............................</p>
          </div>
  
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-card">Rekrutmen</li>
                <li data-filter=".filter-web">Pelatihan</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelatihan 1</h4>
                  <p>Nama Pelatihan</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan 3"><i class="bx bx-plus"></i></a>
                  <a href="Pelatihan1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Rekrutmen 1</h4>
                  <p>Nama Rekrutmen</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rekrutmen 2"><i class="bx bx-plus"></i></a>
                  <a href="Rekrutmen1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelatihan 2</h4>
                  <p>Nama Pelatihan</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan 2"><i class="bx bx-plus"></i></a>
                  <a href="Pelatihan2" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Rekrutmen 2</h4>
                  <p>Nama Rekrutmen</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rekrutmen 1"><i class="bx bx-plus"></i></a>
                  <a href="Rekrutmen2" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Rekrutmen 3</h4>
                  <p>Nama Rekrutmen</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rekrutmen 3"><i class="bx bx-plus"></i></a>
                  <a href="Rekrutmen3" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelatihan 3</h4>
                  <p>Nama Pelatihan</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan 3"><i class="bx bx-plus"></i></a>
                  <a href="Pelatihan3" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection