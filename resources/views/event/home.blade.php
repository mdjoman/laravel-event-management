@extends('event.master')
@section('body')
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner" role="listbox">

      <!-- Slide 2 -->
      @foreach($siliders as $key =>$silider)

      <div class="carousel-item {{$key == 0 ? 'active' : '' }}" style="background-image: url(' {{asset($silider->sliderImage)}} ');"></div>

      @endforeach
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Us Section ======= -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row">
        @foreach($products as $key =>$product)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="">
              <a href="{{ route('model-details', [ 'id' => $product->id])}}">
                <img src="{{ asset($product->image)}}" class="img-fluid" alt="">

            </div>
            <h4>{{ $product->model_name }}</h4>
            <p>{{ $product->lDescription}}</p>
          </div>
          </a>
        </div>
        @if($loop->iteration == 6)
        @break
        @endif
        @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>

            @foreach($categories as $key => $categor)

            <li data-filter=".filter-{{ $categor->id }}"> {{$categor->name }}</li>

            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach($products as $key =>$product)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $product->category_id }}">
          <img src="{{ asset($product->image)}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $product->model_name }}</h4>
            <p>{{ $product->model_Price }} tk</p>
            <a href="{{ asset($product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="{{ route('model-details', [ 'id' => $product->id])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

    
        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Our Clients Section ======= -->

</main><!-- End #main -->
@endsection