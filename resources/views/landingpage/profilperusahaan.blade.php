@extends('landingpage.layout')

@section('content')
     {{-- Foto Awal --}}
       <div class="col-lg-12">
        <img src="{{ asset('LandingPage-Template/assets/img/about.jpg') }}" >
      </div>
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
              <img src="{{ asset('LandingPage-Template/assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
              <div class="content pt-4 pt-lg-0">
                <h3>Profil Perusahaan</h3>
                <p>
                  PT Yaza Pratama adalah perusahaan yang bergerak di bidang Penyediaan Jasa Tenaga Alih Daya serta berbadan Hukum dan berlokasi di Jalan Soetoyo S. Komplek Rajawali No. 634 Banjarmasin, Kalimantan Selatan.
                </p>
                <p>
                  PT Yaza Pratama berdiri sejak tahun 2003 dan telah lebih 18 tahun berkarya dan berperan aktif dalam Penyediaan Jasa Tenaga Alih Daya diberbagai Instansi, baik Pemerintah, BUMN, Swasta maupun Perorangan. Banyak pengalaman dan proses pembelajaran yang telah dilewati dari tahun ke tahun yang membawa perusahaan terus tumbuh dan berkembang sesuai dengan rencana strategis perusahaan.
                </p>
                <p>
                  Banyak pengalaman dan proses pembelajaran yang telah dilewati dari tahun ke tahun yang membawa perusahaan terus tumbuh dan berkembang sesuai dengan rencana strategis perusahaan.
                </p>
                <p>
                  Penyediaan Jasa Tenaga Alih Daya hanya dapat dicapai melalui komitmen dan dukungan seluruh mitra perusahaan serta penerapan manajemen yang efektif dan efisien yang berkesinambungan dengan memperhatikan aspek Keselamatan dan Kesehatan Kerja (K3) di lingkungan kerja.
                </p>
                <p>
                  Sebagai wujud dari rangkaian pembelajaran dan pengalaman perusahaan PT Yaza Pratama siap memberikan Jasa dan Pelayanan Tenaga Alih Daya yang terbaik bagi pengguna. 
                </p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item" data-aos="fade-up">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                    <h4>Visi</h4>
                    <p>Memegang teguh komitmen untuk melaksanakan kegiatan usaha yang kompetitif dan menguntungkan menuju pertumbuhan usaha yang berkesinambungan.
                      </p>
                  </a>
                </li>
                <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                    <h4>Misi</h4>

                    <ul>
                      <li><i></i><p>Berperan serta dalam pembangunan dengan melaksanakan kegiatan usaha di bidang Penyediaan Jasa Tenaga Kerja (Outsourching) sesuai dengan permintaan perusahaan.</p></li>
                      <li><i></i><p>Memberikan pelayanan bagi Pelanggan dengan kondisi yang terbaik, kompetitif dan saling menguntungkan.</p></li>
                      <li><i></i><p>Menyelaraskan pertumbuhan usaha yang terus meningkat untuk menjamin berkesinambungan usaha dengan menempatkan sumber daya manusia sebagai aset perusahaan.</p></li>
                      <li><i></i><p>Menunjang program pengembangan dana pemilik saham/investor.</p></li>
                    </ul>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <figure>
                    <img src="{{ asset('LandingPage-Template/assets/img/features-1.png') }}" alt="" class="img-fluid">
                  </figure>
                </div>
                <div class="tab-pane" id="tab-2">
                  <figure>
                    <img src="{{ asset('LandingPage-Template/assets/img/features-2.png') }}" alt="" class="img-fluid">
                  </figure>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Features Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Susunan Direksi</h2>
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
                  <h4>Kumala Sari</h4>
                  <span>Direktur</span>
                  <div class="social">
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
      
@endsection