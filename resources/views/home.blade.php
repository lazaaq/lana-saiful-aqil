@extends('layouts.main')

@section('title')
LANA SAIFUL AQIL
@endsection
@section('contents')
<!-- Header-->
<header class="d-flex align-items-center h-100">
  <div class="container px-4 px-lg-5 text-center">
      <div class="mb-1 display-4" style="font-weight: 600;">Lana Saiful Aqil</div>
      <div class="mb-4 display-6">Fullstack Web Developer, Fullstack Mobile Developer</div>
      <a class="btn btn-primary btn-xl" href="#about">Get to know me</a>
  </div>
</header>
<style>
  header {
      background-image: url('image/static/hero-home.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
  }
  header .judul-hero {
      font-size: 5rem;
      font-weight: 700;
  }
</style>

<!-- About-->
<section class="content-section bg-light" id="about">
  <div class="container px-4 px-lg-5 text-center">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-10">
              <h2>My Biography</h2>
              <p class="lead mb-5">
                  Hello i'm Lana, 19 years old man. Since 2020 i'm studying <b>Software Engineering</b> in Universitas Gadjahmada at Yogyakarta. I live in Tegal City, Center Java Province, Indonesia. My specialist is <b>Web Developer</b>, both Frontend and Backend (<b>Fullstack</b>). I also learn about <b>Mobile Developer</b> using Flutter and Firebase.
              </p>
              <a class="btn btn-dark btn-xl" href="skills.html#">See My Skills</a>
          </div>
      </div>
  </div>
</section>
<!-- Services-->
<section class="content-section bg-primary text-white text-center" id="services">
  <div class="container px-4 px-lg-5">
      <div class="content-section-heading">
          <h3 class="text-secondary mb-0">Services</h3>
          <h2 class="mb-5">What I Can Do</h2>
      </div>
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <span class="service-icon rounded-circle mx-auto mb-3"><i class="bi bi-phone"></i></span>
              <h4><strong>Mobile App</strong></h4>
              <p class="text-faded mb-0">Flutter + Firebase</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <span class="service-icon rounded-circle mx-auto mb-3"><i class="bi bi-laptop"></i></span>
              <h4><strong>Frontend Web Dev</strong></h4>
              <p class="text-faded mb-0">ReactJS</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <span class="service-icon rounded-circle mx-auto mb-3"><i class="bi bi-laptop"></i></span>
              <h4><strong>Backend Web Dev</strong></h4>
              <p class="text-faded mb-0">Laravel, NodeJS</p>
          </div>
      </div>
  </div>
</section>
<!-- Callout-->
<section class="callout">
  <div class="container px-4 px-lg-5 text-center">
      <div class="mx-auto mb-5 mycv">
          My Curriculum Vitae
      </div>
      <a class="btn btn-primary btn-xl" href="assets/file/CV - GDSC.pdf" target="blank">Open CV</a>
  </div>
</section>
<style>
    section.callout {
        background-image: url('image/static/bg-1.jpg')
    }
  section.callout .mycv {
      font-size: 3rem;
      font-weight: 600;
  }
  @media only screen and (max-width: 575px) {
      section.callout .mycv {
          font-size: 10vw;
      }
  }
</style>
<!-- Portfolio-->
<section class="content-section" id="portfolio">
  <div class="container px-4 px-lg-5">
      <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 class="mb-5">Recent Projects</h2>
      </div>
      <div class="row gx-0">
          <div class="col-lg-6">
              <a class="portfolio-item" href="projects.html#k3rs">
                  <div class="caption">
                      <div class="caption-content">
                          <div class="h2">Kesehatan dan Keselamatan Rumah Sakit</div>
                          <p class="mb-0">Web Admin Dashboard Rumah Sakit</p>
                      </div>
                  </div>
                  <img class="img-fluid" src="image/static/bg-2.jpg" alt="..." />
              </a>
          </div>
          <div class="col-lg-6">
              <a class="portfolio-item" href="projects.html#comprosmait">
                  <div class="caption">
                      <div class="caption-content">
                          <div class="h2">Company Profile Sekolah</div>
                          <p class="mb-0">Terdiri dari Halaman user dan Halaman Admin (Untuk update berita)</p>
                      </div>
                  </div>
                  <img class="img-fluid" src="image/static/bg-3.jpg" alt="..." />
              </a>
          </div>
          <div class="col-lg-6">
              <a class="portfolio-item" href="projects.html#ppdbsmait">
                  <div class="caption">
                      <div class="caption-content">
                          <div class="h2">Website Penerimaan Peserta Didik Baru Sekolah</div>
                          <p class="mb-0">Berisi flow pendaftaran peserta didik baru beserta dengan Dashboard Admin</p>
                      </div>
                  </div>
                  <img class="img-fluid" src="image/static/bg-4.jpg" alt="..." />
              </a>
          </div>
          <div class="col-lg-6">
              <a class="portfolio-item" href="projects.html#postify">
                  <div class="caption">
                      <div class="caption-content">
                          <div class="h2">Web App untuk Artikel</div>
                          <p class="mb-0">Berisi fitur untuk upload artikel, membaca artikel, like, comment, dsb (Seperti Medium)</p>
                      </div>
                  </div>
                  <img class="img-fluid" src="image/static/bg-1.jpg" alt="..." />
              </a>
          </div>
      </div>
  </div>
</section>
@endsection