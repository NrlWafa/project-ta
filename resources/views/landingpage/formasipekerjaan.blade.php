@extends('landingpage.layout')

@section('content')
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
            <li><a class="nav-link scrollto" href="/">Beranda</a></li>
            <li><a class="nav-link scrollto" href="Blog">Blog</a></li>
            <li><a class="nav-link scrollto" href="Layanan" >Layanan</a></li>

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
          <a href="https://www.facebook.com/groups/507934266239777" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/yaza_pratama/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
      </div>
    </header><!-- End Header -->

      {{-- Foto Awal --}}
      <div class="col-lg-12">
        <center><img src="{{ asset('LandingPage-Template/assets/img/Team.jpeg') }}" ></center>
      </div>
      
     <!-- ======= F.A.Q Section ======= -->
     <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Formasi Pekerjaan</h2>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Satpam<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <ul>
                <i></i><p>1. Pendidikan Formal (Minimal SLTA)</p>
                <i></i><p>2. Pendidikan Non Formal (Jika ada)</p>
                <i></i><p>3. Usia minimal 18 tahun & maksimal 50 tahun</p>
                <i></i><p>4. Pengalaman kerja sebagai Satpam (Diutamakan)</p>
                <i></i><p>5. Pendidikan Satpam (Diutamakan)</p>
                <i></i><p>6. Tinggi badan minimal 160 cm untuk wanita & 165 untuk pria</p>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Cleaning Service<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <ul>
                <i></i><p>1. Pendidikan Formal (Minimal SLTA)</p>
                <i></i><p>2. Pendidikan Non Formal (Jika ada)</p>
                <i></i><p>3. Usia minimal 20 tahun & maksimal 40 tahun</p>
                <i></i><p>4. Pengalaman kerja sebagai Cleaning Service (Diutamakan)</p>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Teknisi<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <ul>
                <i></i><p>1. Pendidikan Formal (Minimal D3)</p>
                <i></i><p>2. Pendidikan Non Formal (Jika ada)</p>
                <i></i><p>3. Usia minimal 22 tahun & maksimal 35 tahun</p>
                <i></i><p>4. Pengalaman kerja sebagai Teknisi (Diutamakan)</p>
                <i></i><p>5. Mampu mengoperasikan komputer (MS Office)</p>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Helper<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <ul>
                <i></i><p>1. Pendidikan Formal (Minimal D3)</p>
                <i></i><p>2. Pendidikan Non Formal (Jika ada)</p>
                <i></i><p>3. Usia minimal 22 tahun & maksimal 35 tahun</p>
                <i></i><p>4. Pengalaman kerja sebagai Helper (Diutamakan)</p>
                <i></i><p>5. Mampu mengoperasikan komputer (MS Office)</p>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Operator<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <ul>
                <i></i><p>1. Pendidikan Formal (Minimal D3)</p>
                <i></i><p>2. Pendidikan Non Formal (Jika ada)</p>
                <i></i><p>3. Usia minimal 24 tahun & maksimal 35 tahun</p>
                <i></i><p>4. Pengalaman kerja sebagai Operator (Diutamakan)</p>
                <i></i><p>5. Mampu mengoperasikan komputer (MS Office)</p>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Admin<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <ul>
                <i></i><p>1. Pendidikan Formal (Minimal D3)</p>
                <i></i><p>2. Pendidikan Non Formal (Jika ada)</p>
                <i></i><p>3. Usia minimal 20 tahun & maksimal 35 tahun</p>
                <i></i><p>4. Pengalaman kerja sebagai Admin (Diutamakan)</p>
                <i></i><p>5. Mampu mengoperasikan komputer (MS Office)</p>
              </ul>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">Driver<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
              <ul>
                <i></i><p>1. Pendidikan Formal (Minimal SLTA)</p>
                <i></i><p>2. Pendidikan Non Formal (Jika ada)</p>
                <i></i><p>3. Usia minimal 24 tahun & maksimal 40 tahun</p>
                <i></i><p>4. Pengalaman kerja sebagai Driver (Diutamakan)</p>
                <i></i><p>5. Memiliki Surat Izin Mengemudi (SIM)</p>
              </ul>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

@endsection