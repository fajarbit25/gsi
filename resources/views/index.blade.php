@extends('template.main')
@section('main')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="{{asset('storage/'.$setting->background)}}" alt="" data-aos="fade-in" class="">

  <div class="container d-flex flex-column align-items-center text-center mt-auto">
    <h2 data-aos="fade-up" data-aos-delay="100" class="">CARGO<br><span>MARINE</span> INSPECTION</h2>
    <p data-aos="fade-up" data-aos-delay="200"> {{$setting->slogan}} </p>
    <div data-aos="fade-up" data-aos-delay="300" class="">
      <a href="{{$setting->link_video}}" class="glightbox pulsating-play-btn mt-3"></a>
    </div>
  </div>

  <div class="about-info mt-auto position-relative">

    <div class="container position-relative" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8">
          <h2>About GSI</h2>
          <p>
            {{$setting->text}}
          </p>
        </div>
        <div class="col-lg-4">
          <h3>Where</h3>
          <p>
            <i class="bi bi-geo-alt-fill"></i> Balikpapan, Kalimantan Indonesia
          </p>
          <p>
            <i class="bi bi-geo-alt-fill"></i> Makassar, Sulawesi Selatan Indonesia
          </p>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- Speakers Section -->
<section id="speakers" class="speakers section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services<br></h2>

  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      @if ($services)
      @foreach ($services as $service)
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="{{asset('storage/'.$service->image)}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4><a href="speaker-details.html"> {{$service->service_name}} </a></h4>
              <span>{{$service->title}}</span>
            </div>
            <div class="social">
             <a href="#about"><i class="bi bi-eye-fill"></i> Details</a>  
            </div>
          </div>
        </div>
      </div><!-- End Service -->
      @endforeach
      @endif
    </div>

  </div>

</section><!-- /Speakers Section -->

<!-- Schedule Section -->
<section id="about" class="schedule section">

  <!-- about Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About<br></h2>
    <p>
      {!! $about->about ?? "unupdate"; !!}
    </p>
  </div><!-- End Section Title -->

  <div class="container">

    <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
      {{-- <li class="nav-item">
        <a class="nav-link active" href="#proteleum-survey" role="tab" data-bs-toggle="tab">PROTELEUM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#chemical-survey" role="tab" data-bs-toggle="tab">CHEMICAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#marine-survey" role="tab" data-bs-toggle="tab">MARINE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#coal-service" role="tab" data-bs-toggle="tab">COAL</a>
      </li> --}}
      @foreach ($services as $service)
      <li class="nav-item">
        <a class="nav-link @if ($loop->iteration == 1) active @endif" href="#service{{$service->id}}" onclick="fetchServiceApi({{$service->id}})" role="tab" data-bs-toggle="tab">PROTELEUM</a>
      </li>
      @endforeach

    </ul>

    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <h3 class="sub-heading"></h3>

      <!-- Service -->
      <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="service{{$service->id}}">

        <div class="row schedule-item">
          <div class="col-md-10">

            
            <h4>Registration</h4>
            <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
          </div>
        </div>

      </div><!-- End Service -->

    </div>

  </div>
</section><!-- /about Section -->

<!-- Gallery Section -->
<section id="gallery" class="venue section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Gallery<br></h2>
    <p>Gallery Activity PT. Global Survindo Inspectama</p>
  </div><!-- End Section Title -->

  <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-0">

      @if ($galleries)
      @foreach ($galleries as $gallery)
      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="{{(asset('storage/'.$gallery->photo))}}" class="glightbox" data-gall="venue-gallery">
            <img src="{{asset('storage/'.$gallery->photo)}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      @endforeach
      @endif

    </div>
  </div>

</section><!-- /Gallery Section -->

<!-- visimisi Section -->
<section id="visimisi" class="hotels section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Vision and Mission</h2>
    <p>Company Vision adn Mission</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 pt-3">
          <h3><span class="stretched-link">Vision</span></h3>
          @if ($vision)
          @foreach ($vision as $visi)
            <p> {{$loop->iteration.'. '.$visi->value}} </p>
          @endforeach
          @endif
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 pt-3">
          <h3><span class="stretched-link">Mission</span></h3>
          @if ($mision)
          @foreach ($mision as $misi)
            <p> {{$loop->iteration.'. '.$misi->value}} </p>
          @endforeach
          @endif
        </div>
      </div><!-- End Card Item -->

    </div>

  </div>

</section><!-- /visimisi Section -->

<!-- Gallery Section -->
<section id="newupdate" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>New Activity</h2>
    <p>Update new activities</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "centeredSlides": true,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 0
            },
            "768": {
              "slidesPerView": 3,
              "spaceBetween": 20
            },
            "1200": {
              "slidesPerView": 5,
              "spaceBetween": 20
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        @if ($galleries)
        @foreach ($galleries as $gallery)
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('storage/'.$gallery->photo)}}"><img src="{{asset('storage/'.$gallery->photo)}}" class="img-fluid" alt=""></a></div>
        @endforeach
        @endif
        {{-- <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/event-gallery/event-gallery-2.jpg')}}"><img src="{{asset('assets/img/event-gallery/event-gallery-2.jpg')}}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/event-gallery/event-gallery-3.jpg')}}"><img src="{{asset('assets/img/event-gallery/event-gallery-3.jpg')}}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/event-gallery/event-gallery-4.jpg')}}"><img src="{{asset('assets/img/event-gallery/event-gallery-4.jpg')}}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/event-gallery/event-gallery-5.jpg')}}"><img src="{{asset('assets/img/event-gallery/event-gallery-5.jpg')}}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/event-gallery/event-gallery-6.jpg')}}"><img src="{{asset('assets/img/event-gallery/event-gallery-6.jpg')}}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/event-gallery/event-gallery-7.jpg')}}"><img src="{{asset('assets/img/event-gallery/event-gallery-7.jpg')}}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/img/event-gallery/event-gallery-8.jpg')}}"><img src="{{asset('assets/img/event-gallery/event-gallery-8.jpg')}}" class="img-fluid" alt=""></a></div> --}}
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Gallery Section -->

<!-- Sponsors Section -->
<section id="sponsors" class="sponsors section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Sponsors</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0 clients-wrap">

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

    </div>

  </div>

</section><!-- /Sponsors Section -->

<!-- Faq Section -->
<section id="faq" class="faq section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
            <div class="faq-content">
              <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
            <div class="faq-content">
              <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
            <div class="faq-content">
              <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
            <div class="faq-content">
              <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div><!-- End Faq Column-->

    </div>

  </div>

</section><!-- /Faq Section -->

<!-- Buy Tickets Section -->
<section id="buy-tickets" class="buy-tickets section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Motto and Corporate Commitment<br></h2>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4 d-flex align-items-center justify-content-center">
        <h3>Motto</h3>
      </div>
      <div class="col-lg-8 d-flex align-items-center justify-content-center">
        <p>
          <span class="text-warning fw-bold">PT. Global Survindo Inspectama </span> always put on efforts in providing 
          the services of Independent Survey and Technical Inspection with has no impact on the healt, safety and environment issues.
        </p>
      </div>
    </div><!-- End commitment Item -->

    <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-4 d-flex align-items-center justify-content-center">
        <h3>Corporate Commitment<br></h3>
      </div>
      <div class="col-lg-8 d-flex align-items-center justify-content-center">
        <p>
          <span class="text-light fw-bold">PT. Global Survindo Inspectama </span> always put on efforts in providing 
          the services of Independent Survey and Technical Inspection with has no impact on the healt, safety and environment issues.
        </p>
      </div>
    </div><!-- End Commitment Item -->

    

  </div>

</section><!-- /Buy Tickets Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt"></i>
          <h3>Address</h3>
          <p>Kalimantan Adam Street, New York, NY 535022</p>
          <p>Makassar Adam Street, New York, NY 535022</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone"></i>
          <h3>Call Us</h3>
          <p>+1 5589 55488 55</p>
          <p>+1 5589 55488 55</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope"></i>
          <h3>Email Us</h3>
          <p>info@example.com</p>
          <p>info@example.com</p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="row gy-4 mt-1">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->
    </div>

  </div>

</section><!-- /Contact Section -->


{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
{{-- JS --}}
<script>
  $(document).ready(function() {
    
  });

  function fetchServiceApi(id)
  {
    //fetch data from gsi api
    $.ajax({
      url: "{{url('api/services')}}",
      type: 'GET',
      headers: {
        "Authorization" : "public_globalSurvindo",
        'Content-type'  : "application/json"
      },
      data : {
        id : id,
      },
      success:function(response) {
        console.log(response)
        $(".sub-heading").text(response.data.description)
      },
      error:function(xhr, status, error) {
        console.error("Error:", error);
      }
    });
  }
</script>


@endsection
