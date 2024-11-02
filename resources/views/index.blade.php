@extends('layout.homelayout')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src={{ asset('assets/img/hero-bg.png') }} class="d-block w-100">
      <div id="carousel-caption" class="carousel-caption h-100 align-items-center d-flex">
        <div class="container">
          <div class="none col-md-6" style="color: #1F2B6C">
            <h2 class="title-hero"> Welcome to <br /> Medical Hospital</h2>
            <p class="description-title m-0">Lorem ipsum dolor sit amet, consectetur <br /> adipiscing elit.
              Interdum vivamus augue <br /> cursus eget sagittis etiam.</p>
            <button id="btn-title" class="border-0 rounded bg-primary text-white">
              <a href="#Appoiment" class="text-white text-decoration-none">
                Appoiment Now
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src={{ asset('assets/img/hero-bg-2.png') }} class="d-block w-100">
      <div id="carousel-caption" class="carousel-caption h-100 align-items-center d-flex">
        <div class="container">
          <div class="none col-md-6" style="color: #1F2B6C">
            <p class="description-title m-0">Welcome to Medical Hospital</p>
            <h2 class="title-hero">
              Best Care for Your <br />Good Health </h2>
            <button id="btn-title" class="border-0 rounded bg-primary text-white">
              <a href="#Service" class="text-white text-decoration-none">
                Our Service
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src={{ asset('assets/img/hero-bg-3.png') }} class="d-block w-100">
      <div id="carousel-caption" class="carousel-caption h-100 align-items-center d-flex">
        <div class="container">
          <div class="none col-md-6" style="color: #1F2B6C">
            <p class="description-title m-0">Caring for Life</p>
            <h2 class="title-hero">
              Leading the Way <br />
              in Medical Excellence</h2>
            <button id="btn-title" class="border-0 rounded bg-primary">
              <a href="#Department" class="text-white text-decoration-none">
                Our Department
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection