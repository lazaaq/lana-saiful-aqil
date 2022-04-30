@extends('layouts.main')

@section('title')
  Skills - Lana Saiful Aqil
@endsection

@section('contents')
  <header class="d-flex align-items-center h-100">
      <div class="container px-4 px-lg-5 text-center">
          <div class="mb-1 judul-hero">SKILLS</div>
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

  <style>
      @media only screen and (max-width: 768px) {
          section.body {
              padding-left: 0!important;
              padding-right: 0!important;
          }
      }
      @media only screen and (max-width: 576px) {
          section.body .card {
              width: 100%!important;
          }
          section.body .container {
              padding-left: 2rem;
              padding-right: 2rem;
          }
          section.body .deskripsi .text-center {
              font-size: 1.5rem!important;
          }
      }
  </style>

  <section class="body" style="height: fit-content; padding: 5rem 10rem;">
      <div class="container">
          <h2 class="text-center mb-5">Web Developer</h2>
          <div class="row justify-content-sm-center justify-content-evenly">
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-html.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">HTML</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-css.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">CSS</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-bootstrap.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">BOOTSTRAP</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-javascript.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">JAVASCRIPT</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-php.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">PHP</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-laravel.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">LARAVEL</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-mysql.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">MYSQL</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-nodejs.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">NODEJS</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-vscode.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">VSCODE</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-heroku.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">HEROKU</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <h2 class="text-center mb-5" style="margin-top: 8rem;">Mobile Developer</h2>
          <div class="row justify-content-center">
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-flutter.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">Flutter</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-android-studio.jpg" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">ANDROID STUDIO</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <h2 class="text-center mb-5" style="margin-top: 8rem;">UI UX Designer</h2>
          <div class="row justify-content-center">
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-figma.jpg" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">FIGMA</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <h2 class="text-center mb-5" style="margin-top: 8rem;">TOOLS</h2>
          <div class="row justify-content-center">
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-git.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">GIT</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                  <div class="card w-100 h-100">
                      <div class="card-body">
                          <div class="image text-center">
                              <img class="rounded" src="image/static/skill-github.png" alt="" width="85%">
                          </div>
                          <div class="deskripsi">
                              <div class="text-center" style="font-weight: 700; font-size: 2vw;">GITHUB</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection