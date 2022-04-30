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
            <div class="row">
                @foreach ($skills as $skill)
                <div class="col col-6 col-sm-4 col-lg-3 mb-3">
                    <div class="card w-100 h-100">
                        <div class="card-body">
                            <div class="image text-center">
                                <img class="rounded" src="{{ $skill->icon }}" alt="" width="85%">
                            </div>
                            <div class="deskripsi">
                                <div class="text-center" style="font-weight: 700; font-size: 2vw;">{{ $skill->name }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
      </div>
  </section>
@endsection