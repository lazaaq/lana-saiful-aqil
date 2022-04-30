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
    background-image: url('image/static/hero.jpg');
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
          <div class="row" style="margin-top: 7rem;">
            @foreach ($projects as $project)       
            <div class="col-lg-6 mt-3">
                <div class="card h-100">
                    <div class="card-header">
                        {{ $project->title }}
                    </div>
                    <div class="card-body">
                        {{ $project->description }}
                    </div>
                    <div class="card-footer">
                        @if ($project->demo)
                        <a href="{{ $project->demo }}" class="btn btn-primary">Demo</a>
                        @endif
                        @if ($project->code)
                        <a href="{{ $project->code }}" class="btn btn-info text-light">Code</a>
                        @endif
                        @if ($project->website)
                        <a href="{{ $project->website }}" class="btn btn-success">Website</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </section>

@endsection