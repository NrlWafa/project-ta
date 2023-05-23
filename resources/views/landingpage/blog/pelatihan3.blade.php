@extends('landingpage.blog.layout')

@section('content')

   <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                  <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan3.jpg') }}" alt="">
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Berita</h3>
              <ul>
                <li><strong>Kategori</strong>: Pelatihan</li>
                <li><strong>Tempat</strong>: PLN UPDL Banjarbaru</li>
                <li><strong>Tanggal</strong>: 01 Juli, 2022</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Pelatihan Binsik Satpam</h2>
              <p>
                Pelatihan Binsik Satpam PT Yaza Pratama, penempatan PLN UPDL Banjarbaru.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  
@endsection