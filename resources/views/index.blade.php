@extends('layout.homelayout')

@section('content')
{{-- carousel --}}
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

{{-- about us --}}
<section id="aboutus" class="d-flex align-items-center" style="background-color: #EEEEEE">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto order-2 order-lg-1">
        <h3 class="fw-medium text-primary my-3">
          WELCOME TO <br />
          <span class="text-black">MEDICAL HOSPITAL</span>
        </h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacus, mauris sagittis et sem. Magna cursus orci
          id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacus, mauris sagittis et sem. Magna cursus
          orci id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacus, mauris sagittis et sem.
          <br />
          <br />
          Magna cursus orci id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
          consectetur adipiscing elit. Ut lacus, mauris sagittis et sem. Magna cursus orci id. Lorem ipsum dolor sit
          amet, consectetur adipiscing elit. Ut lacus, mauris sagittis et sem. Lorem ipsum dolor sit amet, consectetur
          adipiscing elit.
        </p>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src={{asset("assets/img/about.png")}} class="img-fluid rounded-circle">
      </div>
    </div>

  </div>

</section>

{{-- doctors --}}
<section id="doctors" class="">

  <div class="container text-center">
    <h2>Doctors</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6">
        <div class=" d-flex align-items-start">
          <div><img src="assets/img/doctors/doctors-1.jpg" width="250" class="img-fluid rounded-circle"></div>
          <div class="m-auto ps-2">
            <h4 class="text-primary mb-1">Walter White</h4>
            <span class="fw-semibold">Chief Medical Officer</span>
            <p class="mt-1">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class=" d-flex align-items-start">
          <div><img src="assets/img/doctors/doctors-2.jpg" width="250" class="img-fluid rounded-circle" alt=""></div>
          <div class="m-auto ps-2">
            <h4 class="text-primary mb-1">Sarah Jhonson</h4>
            <span class="fw-semibold">Anesthesiologist</span>
            <p class="mt-1">Aut maiores voluptates amet et quis praesentium qui senda para</p>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class=" d-flex align-items-start">
          <div><img src="assets/img/doctors/doctors-3.jpg" width="250" class="img-fluid rounded-circle" alt=""></div>
          <div class="m-auto ps-2">
            <h4 class="text-primary mb-1">William Anderson</h4>
            <span class="fw-semibold">Cardiology</span>
            <p class="mt-1">Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
            </div>
        </div>
      </div>

      <div class="col-lg-6" >
        <div class="d-flex align-items-start">
          <div><img src="assets/img/doctors/doctors-4.jpg" width="250" class="img-fluid rounded-circle" alt=""></div>
          <div class="m-auto ps-2">
            <h4 class="text-primary mb-1">Amanda Jepson</h4>
            <span class="fw-semibold">Neurosurgeon</span>
            <p class="mt-1">Dolorum tempora officiis odit laborum officiis et et accusamus</p>
            </div>
        </div>
      </div>

    </div>  
    <div class="text-center mt-5">
      <button type="button" class="btn btn-primary">
        <a href="" class="text-decoration-none text-white">See More</a>
      </button>
    </div>
  </div>

</section>

{{-- contact --}}
<section id="contact" class="">

  <!-- Section Title -->
  <div class="container text-center">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="mb-5">
    <iframe style="border:0; width: 100%; height: 270px;"
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
      frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="container">

    <div class="row">

      <div class="col-lg-4">
        <div class="info-item d-flex ">
          <div>
            <h3 class="text-primary">Location</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="info-item d-flex " >
          <div>
            <h3 class="text-primary">Call Us</h3>
            <p>+(237) 681-812-255</p>
          </div>
        </div>

        <div class="info-item d-flex " data-aos="fade-up" data-aos-delay="500">
          <div>
            <h3 class="text-primary">Email Us</h3>
            <p>example@gmail.com</p>
          </div>
        </div>

        <div class="info-item d-flex " data-aos="fade-up" data-aos-delay="500">
          <div>
            <h3 class="text-primary">Working Hours</h3>
            <p class="mb-0">Mon-Sat 09:00-20:00</p>
            <p>Sunday Emergency only</p>
          </div>
        </div>

      </div>

      <div class="col-lg-8">
        <form action="" method="post">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              {{-- <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div> --}}
              <button type="submit" class="btn btn-primary">
                <a href="" class="text-white text-decoration-none">Send Message</a>
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>

</section>
@endsection