@extends('landingpage.layout')

@section('content')
<body>
   
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <div>
              <h1>Perusahaan Penyedia Jasa Tenaga Alih Daya</h1>
              <h2>Kami akan memberikan Pelayanan yang terbaik We give serve better.</h2>
              <a href="Login" target="_blank" class="btn-get-started scrollto">Log In</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
            <img src="{{ asset('LandingPage-Template/assets/img/hero-img.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
  
    </section><!-- End Hero -->
  
    <main id="main">
  
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
                  <a href="/profil-perusahaan" class="btn-get-started">Detail</a>
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
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-4">
                    <h4>Motto</h4>
                    <p>Kebersamaan, Tanggung Jawab dan Profesionalisme dalam menjalankan tugas.</p>
                  </a>
                </li>
                <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-1">
                    <h4>Slogan</h4>
                      <p>Kami akan memberikan Pelayanan yang terbaik - We give serve better.</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-4">
                  <figure>
                    <img src="{{ asset('LandingPage-Template/assets/img/features-4.png') }}" alt="" class="img-fluid">
                  </figure>
                </div>
                <div class="tab-pane" id="tab-1">
                  <figure>
                    <img src="{{ asset('LandingPage-Template/assets/img/features-1.png') }}" alt="" class="img-fluid">
                  </figure>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Features Section -->
   
  
      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container">
  
          <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Call To Action</h3>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>
  
        </div>
      </section><!-- End Cta Section -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>      
                  <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in">
                <div class="pic"><img src="{{ asset('LandingPage-Template/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div> --}}
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
  
  
      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
          </div>
  
          <ul class="faq-list">
  
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>
  
            <li>
              <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>
  
            <li>
              <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>
  
            <li>
              <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>
  
            <li>
              <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                </p>
              </div>
            </li>
  
            <li>
              <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                </p>
              </div>
            </li>
  
          </ul>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
</body>
    
@endsection

