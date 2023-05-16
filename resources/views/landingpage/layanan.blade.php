@extends('landingpage.layout')

@section('content')

<body>
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Layanan</h2>
            <p>Dengan menjunjung tinggi Motto Kebersamaan, Tanggung Jawab dan Profesionalisme dalam menjalankan tugas, Kami akan memberikan Pelayanan yang terbaik - We give serve better.</p>
          </div>
  
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container">
          
                  <div class="section-title" data-aos="fade-up">
                    <h2>Clients</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                  </div>
          
                  <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="250">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="client-logo" data-aos="zoom-in" data-aos-delay="350">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-7.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
                      <div class="client-logo">
                        <img src="{{ asset('LandingPage-Template/assets/img/clients/client-8.png') }}" class="img-fluid" alt="">
                      </div>
                    </div>
          
                  </div>
          
                </div>
    </section><!-- End Clients Section -->
    
    </body>
@endsection