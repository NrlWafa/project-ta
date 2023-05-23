@extends('landingpage.blog.layout')

@section('content')

   <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                  <img src="{{ asset('LandingPage-Template/assets/img/blog/event1.jpg') }}" alt="">
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
                <li><strong>Tanggal</strong>: 01 Mei, 2023</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>GM UID KSKT Menyapa</h2>
              <p>
                Satuan Pengamanan mengikuti acara GM UID KSKT Menyapa dan juga Perpisahan Purna Tugas Bapak Suhadi sebagai Manager K3L.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  
@endsection