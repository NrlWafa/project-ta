@extends('landingpage.layout')

@section('content')

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">

                <div class="logo me-auto">
                    <h1><a href="/">PT Yaza Pratama</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
                        <li><a class="nav-link scrollto" href="Blog">Blog</a></li>
                        <li><a class="nav-link scrollto" href="Layanan">Layanan</a></li>

                        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a class="nav-link scrollto" href="profil-perusahaan">Profil Perusahaan</a></li>
                                <li><a class="nav-link scrollto" href="formasi-pekerjaan">Formasi Pekerjaan</a></li>
                                <li><a class="nav-link scrollto" href="Galeri">Galeri</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="Kontak">Kontak</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <div class="header-social-links d-flex align-items-center">
                    <a href="https://www.facebook.com/groups/507934266239777" target="_blank" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/yaza_pratama/" target="_blank" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </header><!-- End Header -->


        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="fade-up">
                        <div>
                            <h1>Perusahaan Penyedia Jasa Tenaga Alih Daya</h1>
                            <h2>Kami akan memberikan Pelayanan yang terbaik We give serve better.</h2>
                            <a href="Login" class="btn-get-started scrollto">Log In</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                        <img src="{{ asset('LandingPage-Template/assets/img/hero-img.png') }}" class="img-fluid"
                            alt="">
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
                            <img src="{{ asset('LandingPage-Template/assets/img/about.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                            <div class="content pt-4 pt-lg-0">
                                <h3>Profil Perusahaan</h3>
                                <p>
                                    PT Yaza Pratama adalah perusahaan yang bergerak di bidang Penyediaan Jasa Tenaga Alih
                                    Daya serta berbadan Hukum dan berlokasi di Jalan Soetoyo S. Komplek Rajawali No. 634
                                    Banjarmasin, Kalimantan Selatan.
                                </p>
                                <p>
                                    PT Yaza Pratama berdiri sejak tahun 2003 dan telah lebih 18 tahun berkarya dan berperan
                                    aktif dalam Penyediaan Jasa Tenaga Alih Daya diberbagai Instansi, baik Pemerintah, BUMN,
                                    Swasta maupun Perorangan. Banyak pengalaman dan proses pembelajaran yang telah dilewati
                                    dari tahun ke tahun yang membawa perusahaan terus tumbuh dan berkembang sesuai dengan
                                    rencana strategis perusahaan.
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
                                        <img src="{{ asset('LandingPage-Template/assets/img/features-4.png') }}"
                                            alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="tab-pane" id="tab-1">
                                    <figure>
                                        <img src="{{ asset('LandingPage-Template/assets/img/features-1.png') }}"
                                            alt="" class="img-fluid">
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
                            <p>PT Yaza Pratama dengan antusias membuka lowongan pekerjaan menarik dan menawarkan kesempatan
                                bergabung dengan tim Kami. Kami mencari individu yang berbakat, berdedikasi, dan bersemangat
                                untuk berkontribusi dalam mencapai visi dan misi perusahaan.</p>
                        </div>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="Login">Ajukan Lamaran</a>
                        </div>
                    </div>

                </div>
            </section><!-- End Cta Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Testimonials</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-1.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-2.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                        minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-3.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-4.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                        veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                        culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('LandingPage-Template/assets/img/testimonials/testimonials-5.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>FAQ</h2>
                    </div>

                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Bagaimana cara untuk
                                melakukan pendaftaran? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>Untuk melakukan pendaftaran, pelamar cukup mengklik ajukan lamaran untuk
                                    melakukan pendaftaran, tapi sebelum itu pelamar perlu membuat akun terlebih dahulu.</p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apakah ada waktu
                                tertentu untuk mengajukan lamaran? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>Tidak ada, pelamar bisa melakukan pendaftaran atau mengajukan lamaran kapanpun.</p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Berapa lama waktu
                                yang diperlukan untuk menyelesaikan proses seleksi?<i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Waktu yang diperlukan untuk menyelesaikan proses seleksi dapat bervariasi tergantung
                                    pada jumlah pelamar dan kompleksitas posisi yang dilamar. Kami berusaha untuk
                                    menyelesaikan proses seleksi secepat mungkin, namun kami juga ingin memastikan bahwa
                                    setiap pelamar dinilai secara menyeluruh. Kami akan memberikan informasi lebih lanjut
                                    mengenai jadwal seleksi kepada kandidat terpilih.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apakah perusahaan
                                ini menyediakan kesempatan pengembangan karir?<i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, kami percaya pada pengembangan karir dan pertumbuhan karyawan. Kami menyediakan
                                    berbagai program pelatihan dan pengembangan, kesempatan rotasi jabatan, dan pendampingan
                                    profesional. Kami mendorong karyawan untuk terus meningkatkan keterampilan dan kemampuan
                                    mereka.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Bagaimana saya dapat
                                mempersiapkan diri untuk wawancara?<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Untuk mempersiapkan diri dengan baik, Anda dapat membaca informasi tentang perusahaan
                                    kami, mempelajari posisi yang dilamar, dan mempersiapkan jawaban untuk pertanyaan umum
                                    yang mungkin ditanyakan dalam wawancara. Juga, pastikan untuk membawa salinan CV dan
                                    surat lamar.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

        </main><!-- End #main -->
    </body>
@endsection
