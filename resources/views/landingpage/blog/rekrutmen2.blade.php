@extends('landingpage.blog.layout')

@section('content')

   <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                  <img src="{{ asset('LandingPage-Template/assets/img/blog/event2.jpg') }}" alt="">
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Berita</h3>
              <ul>
                <li><strong>Kategori</strong>: Event</li>
                <li><strong>Tempat</strong>: PLN Wilayah Kalimantan Selatan dan Tengah</li>
                <li><strong>Tanggal</strong>: 08 Januari, 2021</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Pemberian Arahan Manager Adumfas PLN UIW KSKT</h2>
              <p>
                Pemberian Arahan Manager Adumfas PLN UIW KSKT, Bapak Sigit, mengenai Kinerja Cleaning Service bahwa selama ini sudah sangat bagus dan beliau berharap agar di tahun yang baru ini lebih konsisten dan lebih bagus lagi.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  
@endsection