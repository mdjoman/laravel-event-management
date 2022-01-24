@extends('event.master')
@section('body')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About</h2>
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li>About</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            @foreach($setting as $key =>$settin )
            {!! $settin->About !!}
            @endforeach
        </div>
    </section>
    <!-- End About Section -->

    @endsection