@extends('landingpage.blog.layout')

@section('content')

   <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                  <img src="{{ asset('LandingPage-Template/assets/img/blog/pelatihan2.jpg') }}" alt="">
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Berita</h3>
              <ul>
                <li><strong>Kategori</strong>: Pelatihan</li>
                <li><strong>Tempat</strong>: PLN UIW KSKT</li>
                <li><strong>Tanggal</strong>: 22 Januari, 2021</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Pelatihan Satpam</h2>
              <p>
                Pelatihan Satpam PT Yaza Pratama, penempatan PLN UIW KSKT yang rutin setiap bulan dan langsung dihadiri serta dipantau oleh K3L PLN UIW KSKT.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  
@endsection