@extends('event.master')
@section('body')


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Our Model</h2>
      <ol>
        <li><a href="{{route('/')}}">Home</a></li>
        <li>Our Model</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

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

        @if($loop->iteration == 8)
        @break
        @endif
        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->

@endsection