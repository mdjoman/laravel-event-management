@extends('event.master')
@section('body')
<main id="main">



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">


            <div class="row mt-5">
                <h2 class="contuct-us">Contact Us</h2>
                <div class="container">
                    @if($message = Session::get('message'))
                    <div class="alert alert-warning alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ $message}}
                    </div>
                    @endif

                    <div class="col-lg-12 mt-5 mt-lg-0">

                        <form action="{{route('massage')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
                                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="number" class="form-control" name="email" id="email" placeholder="Your number*" required>
                                    <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message*" required></textarea>
                                <span class="text-danger">{{ $errors->has('message') ? $errors->first('message') : ''}}</span>
                            </div>

                            <div class="text-center"><button class="btn btn-success btn-lg btn-block mt-5 " type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->


@endsection