@extends('landingpage.blog.layout')

@section('content')

   <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                  <img src="{{ asset('LandingPage-Template/assets/img/blog/event3.jpg') }}" alt="">
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Berita</h3>
              <ul>
                <li><strong>Kategori</strong>: Event</li>
                <li><strong>Tempat</strong>: Banjarmasin</li>
                <li><strong>Tanggal</strong>: 19 Desember, 2022</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Koordinasi Dengan User Suzuki</h2>
              <p>
                Tim Supervisor PT Yaza Pratama sedang berkoordinasi dengan user Suzuki untuk meningkatkan kinerja teman-teman alih daya.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  
@endsection