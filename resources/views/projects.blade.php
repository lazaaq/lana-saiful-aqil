@extends('layouts.main')

@section('title')
  Projects - Lana Saiful Aqil
@endsection

@section('contents')
    

  <header class="d-flex align-items-center h-100">
      <div class="container px-4 px-lg-5 text-center">
          <div class="mb-1 judul-hero">PROJECTS</div>
          <div class="nama">~ Lana Saiful Aqil ~</div>
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
          font-size: 3rem;
          font-weight: 700;
      }
      header .nama {
          font-size: 1.2rem;
          font-weight: 500;
          letter-spacing: 2px;
      }
  </style>

  <section class="body" style="margin-bottom: 7rem;">
      <div class="container px-4 px-lg-5">
          <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">Portfolio</h3>
              <h2 class="mb-5">Recent Projects</h2>
          </div>
          <div class="row gx-0">
              <div class="col-lg-6">
                  <a class="portfolio-item" href="#k3rs">
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
                  <a class="portfolio-item" href="#comprosmait">
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
                  <a class="portfolio-item" href="#ppdbsmait">
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
                  <a class="portfolio-item" href="#postify">
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
          <div class="row" style="margin-top: 7rem;">
              <h3>Detail Recent Project</h3>
              <div class="col-lg-6 mt-3">
                  <div class="card h-100">
                      <div class="card-header">
                          Sistem Kesehatan dan Keselamatan Rumah Sakit
                      </div>
                      <div class="card-body">
                          Di pertengahan 2021, saya dan dua teman saya diberi tugas projek oleh dosen saya untuk membuat Sistem Informasi K3 Rumah Sakit atau disingkat SIK3RS. SIK3RS adalah sistem yang terdiri dari Aplikasi Web Admin, Aplikasi Android, dan API untuk Android. Di project ini saya berperan dalam pembuatan aplikasi web admin (Menggunakan laravel), dan pembuatan API untuk Android (Menggunakan Laravel Sanctum).
                      </div>
                      <div class="card-footer">
                          <a href="https://drive.google.com/file/d/1OnoKEo0PoMIBnzUDPNNZVV86n5EFK_5u/view?usp=sharing" class="btn btn-primary" class="">Demo</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mt-3">
                  <div class="card h-100">
                      <div class="card-header">
                          Company Profile Sekolah
                      </div>
                      <div class="card-body">
                          Pada bulan oktober 2021, saya mendapat klien yang merupakan instansi sekolah di Tegal, Jawa Tengah. Sekolah tersebut bernama SMAIT Luqman Al Hakim. Saya diamanahi untuk membuat website company profile yang meliputi menu beranda, profil sekolah, prestasi siswa, kolom guru, fasilitas sekolah, berita terbaru, galeri, dan kontak.
                          <br><br>
                          Selain membuat company profile, saya juga membuat sistem PPDB Online untuk pendaftaran peserta didik baru di sekolah tersebut (Untuk selengkapnya ada di bawah). Dan juga, selain membuat disisi backend, saya juga membuat disisi frontend. Stack yang saya gunakan di sisi frontend adalah HTML CSS Javascript sederhana. Sedangkan di sisi backend saya menggunakan Laravel.
                      </div>
                      <div class="card-footer">
                          <a href="https://drive.google.com/file/d/1OnoKEo0PoMIBnzUDPNNZVV86n5EFK_5u/view?usp=sharing" class="btn btn-primary" class="">Demo</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mt-3">
                  <div class="card h-100">
                      <div class="card-header">
                          Sistem Penerimaan Peserta Didik Baru Sekolah
                      </div>
                      <div class="card-body">
                          Seperti yang telah saya singgung diatas, saya juga membuat sistem PPDB Online untuk pendaftaran peserta didik baru. Flow-nya sederhana, user siswa akan mendaftar akun baru dengan menyertakan biodata dari siswa, lalu akan diarahkan ke login. Setelah login berhasil, maka user akan diarahkan ke “timeline” dari PPDB. User akan diminta membayar biaya pendaftaran (melalui transfer), melengkapi berkas, tes seleksi, dan lain sebagainya sesuai dengan timeline yang telah ditentukan.
                      </div>
                      <div class="card-footer">
                          <button class="btn btn-primary" disabled>Demo</button>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mt-3">
                  <div class="card h-100">
                      <div class="card-header">
                          Database Alumni Sekolah
                      </div>
                      <div class="card-body">
                          Website database alumni sekolah yang saya buat adalah website sekolah MAN Insan Cendekia Pekalongan. Di dalam nya terdapat data data alumni peserta didik Sekolah MAN Insan Cendekia Pekalongan, mulai dari nama lengkap, jurusan kuliah, nama angkatan, kontak, foto profil, dan banyak sebagainya. Tujuan dari pembuatan website ini adalah untuk memudahkan adik kelas MAN Insan Cendekia Pekalongan untuk menghubungi kakak kelasnya yang telah berkuliah, sehingga dapat mendiskusikan mengenai kelanjutan studi dari adik kelas tersebut. Karena kebanyakan adik kelas di SMA masih bingung dengan pilihan karir nya di masa depan. Dengan adanya website ini, mudah mudahan dapat membantu adik kelas untuk berkomunikasi dengan alumni yang telah berkuliah. Untuk website nya sendiri sudah online dan bisa digunakan oleh masyarakat umum.
                      </div>
                      <div class="card-footer">
                          <a href="https://iaicp.xyz/login.php" class="btn btn-success">Website</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mt-3">
                  <div class="card">
                      <div class="card-header">
                          Kumpulan Landing Page
                      </div>
                      <div class="card-body">
                          <ul>
                              <li class="mb-2">
                                  <a href="http://sigma-hartek.herokuapp.com/index.html" target="_blank" class="">Sigma Hartek</a>
                              </li>
                              <li class="mb-2">
                                  <a href="http://karuniamasforklift.com/" target="_blank" class="">Forklift Karuniamas</a>
                              </li>
                              <li class="mb-2">
                                  <a href="https://kelapaindonesia.herokuapp.com/" target="_blank" class="">Kelapa Indonesia</a>
                              </li>
                              <li class="mb-2">
                                  <a href="https://github.com/lazaaq/compro-restaurant" target="_blank" class="">Restaurant (Kode)</a>
                              </li>
                              <li class="mb-2">
                                  <a href="https://liveligang.github.io/" target="_blank" class="">Livelihood Online Store</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

@endsection