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
          @foreach ($contacts as $regency)
          <p>
            <i class="bi bi-geo-alt-fill"></i> {{$regency->regency}}
          </p>
          @endforeach
        </div>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- Service Section -->
<section id="service" class="speakers section">

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

</section><!-- /service Section -->

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
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Gallery Section -->

<!-- Sponsors Section -->
<section id="sponsors" class="sponsors section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Partnert</h2>
    <p>Our Partnert</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0 clients-wrap">

      @foreach($partnert as $part)
        
      <div class="col-xl-3 col-md-4 client-logo">
        <img src="{{asset('storage/'.$part->logo)}}" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      @endforeach

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

          @foreach($faqs as $faq)
            
          <div class="faq-item @if($loop->iteration == 1) faq-active @endif">
            <h3> {{$faq->question}} </h3>
            <div class="faq-content">
              <p> {!!$faq->answered!!} </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          @endforeach

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
          @foreach($contacts as $street)
          <p> {!! $street->address !!} </p>
          @endforeach
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone"></i>
          <h3>Call Us</h3>

          @foreach($contacts as $phone)
            <p> {{$phone->phone}} </p>
          @endforeach
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope"></i>
          <h3>Email Us</h3>
          @foreach($contacts as $email)
            <p> {{$email->email}} </p>
          @endforeach
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="row mt-1">

      @foreach($contacts as $maps)

        <div class="col-sm-6 mt-3" data-aos="fade-up" data-aos-delay="300">
          <iframe src="{!! $maps->maps !!}" frameborder="0" width="100%" height="500px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

      @endforeach

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
