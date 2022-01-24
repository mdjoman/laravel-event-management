@extends('event.master')
@section('body')


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Model Details</h2>
        <ol>
          <li><a href="{{route('/')}}">Home</a></li>
          <li><a href="#">Our Model</a></li>
          <li>Model Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{asset($product->image)}}" alt="">
              </div>
              @foreach($subimages as $key => $subimage)
              <div class="swiper-slide">
                <img src="{{asset($subimage->subimage)}}" alt="">
              </div>
              @endforeach

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>{{$product->model_name}}</h3>
            <ul>
              <li><strong>Model Code:</strong> {{ $product->model_code}}</li>
              <li><strong>Model Height:</strong>{{ $product->model_hight}}</li>
              <li><strong>Model Price:</strong>{{ $product->model_Price}}tk</li>
            </ul>
          </div>
          <div class="portfolio-description">

            <p>
              {{$product->lDescription}}

            </p>
            <div class="header-social-links d-flex">
              <a href="{{route('contuct')}}">
                <h3 class="btn btn-success"> Contuct Us</h3>
              </a>
              <a href="{{ $settingdetails->whatsapp}}" style="font-size: 32px;" class="linkedin"><i class="bu bi-whatsapp"></i></i></a>
              <a href="{{ $settingdetails->twitter}}" style="font-size: 32px;" class="twitter"><i class="bu bi-twitter"></i></a>
              <a href="{{ $settingdetails->instagram}}" style="font-size: 32px;" class="instagram"><i class="bu bi-instagram"></i></a>

            </div>


          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection