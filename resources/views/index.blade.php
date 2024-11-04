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
        <h3 class="fw-medium my-3" style="color: #1F2B6C">
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

{{-- services --}}
<section id="services" class="">

  <div class="container text-center mb-5">
    <h2 style="color: #1F2B6C">Our Services</h2>
  </div>

  <div class="container">

    <div class="row">
      <div class="col-lg-2">
        <ul class="nav nav-tabs flex-column" role="tablist">
          <li class="nav-item" role="presentation" >
            <a class="nav-link" style="border-color: white" data-bs-toggle="tab" href="#services-tab-1"
              aria-selected="false" role="tab" tabindex="-1">
              <div class="py-3 border rounded d-flex flex-column align-items-center" style="background-color: #1F2B6C; color: #EEEEEE">
                <img src={{ asset('assets/img/svg/cardiogram.svg') }} width="35">
                <span class="text-decoration-none">Free Checkup</span>
              </div>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link active show" style="border-color: white" data-bs-toggle="tab" href="#services-tab-2"
              aria-selected="false" role="tab" tabindex="-1">
              <div class="py-3 border rounded d-flex flex-column align-items-center">
                <img src={{ asset('assets/img/svg/heart.svg') }} width="35">
                <span class="text-decoration-none">Cardiogram</span>
              </div>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" style="border-color: white" href="#services-tab-3"
              aria-selected="false" role="tab" tabindex="-1">
              <div class="py-3 border rounded d-flex flex-column align-items-center">
                <img src={{ asset('assets/img/svg/dnatest.svg') }} width="35">
                <span class="text-decoration-none">Dna Testing</span>
              </div>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" style="border-color: white" href="#services-tab-4"
              aria-selected="false" role="tab" tabindex="-1">
              <div class="py-3 border rounded d-flex flex-column align-items-center">
                <img src={{ asset('assets/img/svg/blookbank.svg') }} width="35">
                <span class="text-decoration-none">Blook Bank</span>
              </div>
            </a>
          </li>
          <li>
            <div class="text-center">
              <a>
                <button type="button" class="btn btn-primary w-100">View All</button>
              </a>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-10 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane" id="services-tab-1" role="tabpanel">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Free Health Checkup Initiative</h3>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Comprehensive Health Assessment</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Personalized Medical Advice</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Early Detection Focus</span></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Experienced Medical Staff</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>No Cost, Full Support</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Community Health Initiative</span></li>
                    </ul>
                  </div>
                </div>
                <p class="mt-3">Experience comprehensive health assessments at no cost. Our free checkup program is designed to help you stay proactive about your health and well-being.</p>
                <p>Join our initiative and take advantage of this opportunity to ensure your health is on the right track. We are here to support you every step of the way.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('assets/img/departments-1.jpg') }}" alt="Free Checkup" class="img-fluid">
              </div>
            </div>
          </div>
          
          <div class="tab-pane active show" id="services-tab-2" role="tabpanel">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3 class="mb-3">A passion for putting patients first.</h3>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src={{ asset('assets/img/svg/point.svg') }} class="me-2"><span>A Passion for
                          Healing</span></li>
                      <li><img src={{ asset('assets/img/svg/point.svg') }} class="me-2"><span>All our best</span></li>
                      <li><img src={{ asset('assets/img/svg/point.svg') }} class="me-2"><span>A Legacy of
                          Excellence</span></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src={{ asset('assets/img/svg/point.svg') }} class="me-2"><span>5-Star Care </span></li>
                      <li><img src={{ asset('assets/img/svg/point.svg') }} class="me-2"><span>Believe in Us</span></li>
                      <li><img src={{ asset('assets/img/svg/point.svg') }} class="me-2"><span>Always Caring</span></li>
                    </ul>
                  </div>
                </div>
                  <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare
                    ornare. Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit
                    nascetur proin massa in. Consequat faucibus porttitor enim et.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque. Convallis
                    felis vitae tortor augue. Velit nascetur proin massa in.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src={{ asset('assets/img/cardioimg.png') }} class="img-fluid">
                <img src={{ asset('assets/img/cardioimg2.png') }} class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="services-tab-3" role="tabpanel">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Advanced DNA Testing Services</h3>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Comprehensive Genetic Analysis</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Accurate and Reliable Results</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>State-of-the-Art Technology</span></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Confidential and Secure</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Expert Genetic Counselors</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Personalized Reports</span></li>
                    </ul>
                  </div>
                </div>
                <p class="mt-3">Unlock insights into your genetic profile with our cutting-edge DNA testing services. Understand more about your heritage, health predispositions, and unique genetic traits.</p>
                <p>Our DNA testing process is designed to be quick, precise, and entirely secure, ensuring your results are accurate and confidential. We employ advanced technology and a team of experts to provide you with comprehensive, personalized genetic analysis and professional guidance.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('assets/img/departments-3.jpg') }}" alt="DNA Testing" class="img-fluid">
              </div>
            </div>
          </div>
          
          <div class="tab-pane" id="services-tab-4" role="tabpanel">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Comprehensive Blood Bank Services</h3>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>24/7 Availability</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Safe and Secure Storage</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Rigorous Screening Process</span></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3" style="font-weight: 600">
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Emergency Blood Donation</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Multiple Blood Types Available</span></li>
                      <li><img src="{{ asset('assets/img/svg/point.svg') }}" class="me-2"><span>Expert Medical Team</span></li>
                    </ul>
                  </div>
                </div>
                <p class="mt-3">Ensuring reliable and safe blood services for patients in need, anytime and anywhere.</p>
                <p>Our blood bank is equipped with state-of-the-art facilities and adheres to the highest standards of safety and quality. We offer a comprehensive range of blood-related services, including secure storage, rigorous testing, and fast processing to meet urgent needs. Our expert team is committed to supporting patients with timely and lifesaving blood transfusions.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('assets/img/departments-2.jpg') }}" alt="Blood Bank" class="img-fluid">
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

  </div>

</section>


{{-- doctors --}}
<section id="doctors" class="">

  <div class="container text-center">
    <h2 style="color: #1F2B6C">Doctors</h2>
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

      <div class="col-lg-6">
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
    <h2 style="color: #1F2B6C">Contact</h2>
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

        <div class="info-item d-flex ">
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