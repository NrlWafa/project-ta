@extends('landingpage.blog.layout')

@section('content')

   <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                  <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan1.jpg') }}" alt="">
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Berita</h3>
              <ul>
                <li><strong>Kategori</strong>: Pelatihan</li>
                <li><strong>Tempat</strong>: PLN Wilayah Kalimantan Selatan dan Tengah</li>
                <li><strong>Tanggal</strong>: 09 Februari, 2022</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Arahan Satuan Pengamanan</h2>
              <p>
                General Manager PLN UIW KSKT, Bapak Tony Bellamy, memberikan arahan kepada Satuan Pengamanan agar selalu memberikan pelayanan terbaik dan juga memberikan keamanan dalam lingkungan PLN UIW KSKT.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  
@endsection