@extends('landingpage.layout')

@section('content')

<body>
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Layanan</h2>
            <p>PT Yaza Pratama menawarkan berbagai layanan untuk membantu perusahaan dalam mengelola sumber daya manusia yang dibutuhkan. Berikut adalah beberapa layanan yang Kami sediakan :</p>
          </div>
  
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h2 class="title"><a href="">Rekrutmen & Seleksi Karyawan</a></h2>
                <p class="description">Membantu dalam proses rekrutmen dan seleksi karyawan, seperti menyaring pelamar, melakukan wawancara pelamar, dan menyeleksi kandidat yang sesuai dengan kebutuhan perusahaan.</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h2 class="title"><a href="">Penyediaan Karyawan Kontrak</a></h2>
                <p class="description">Menyediakan karyawan kontrak untuk jangka waktu tertentu. Ini berguna dalam situasi di mana perusahaan membutuhkan tenaga kerja tambahan untuk proyek sementara, tanpa harus melakukan perekrutan jangka panjang.</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h2 class="title"><a href="">Pelatihan & Pengembangan</a></h2>
                <p class="description">Menyediakan program pelatihan dan pengembangan untuk karyawan. Ini membantu meningkatkan keterampilan dan pengetahuan karyawan, sehingga mereka dapat lebih efektif dalam melakukan pekerjaan.</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h2 class="title"><a href="">Manajemen Kinerja & Administrasi</a></h2>
                <p class="description">Membantu dalam manajemen kinerja karyawan dan mengelola administrasi terkait sumber daya manusia, termasuk penggajian, pengelolaan tunjangan, manajemen cuti, dan administrasi kepegawaian lainnya.</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container">
          
                  <div class="section-title" data-aos="fade-up">
                    <h2>Klien Kami</h2>
                    <p>PT Yaza Pratama telah melayani berbagai jenis klien dari berbagai sektor industri. Klien-klien ini mencakup perusahaan besar, perusahaan skala menengah, dan bahkan bisnis start-up. Berikut adalah beberapa klien yang telah bekerja sama dengan Kami :</p>
                  </div>
          
                  <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_Bank_Kalsel.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_BNI.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_BPJS_Ketenagakerjaan.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_PLN.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="250">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_DPMPTSP.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_Kalsel_Ventura.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="350">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_BPS.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
                      <div class="client-logo">
                        <img src="{{ asset('LandingPage-Template/assets/img/layanan/Logo_Bisma_Dharma.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                  </div>
          
                </div>
    </section><!-- End Clients Section -->
    
    </body>
@endsection