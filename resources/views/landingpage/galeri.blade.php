@extends('landingpage.layout')

@section('content')

      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2></h2>
            <h2>Team</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in">
                <div class="pic"><img src="{{ asset('LandingPage-Template/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{ asset('LandingPage-Template/assets/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/yaza_pratama/"><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{ asset('LandingPage-Template/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/yaza_pratama/"><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
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
            <p>..............................</p>
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
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Event 1</h4>
                  <p>Nama Event</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>SDM 1</h4>
                  <p>Nama SDM</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rekrutmen 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Event 2</h4>
                  <p>Nama Event</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>SDM 2</h4>
                  <p>Nama SDM</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rekrutmen 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>SDM 3</h4>
                  <p>Nama SDM</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rekrutmen 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Event 3</h4>
                  <p>Nama Event</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset('LandingPage-Template/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pelatihan 3"><i class="bx bx-plus"></i></a>                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>

@endsection