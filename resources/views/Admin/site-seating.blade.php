@extends('Admin.admin-master')
@section('body')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Model</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Model</a>
  </div>
</div>

<div class="card card-body mb-5">
  <div class="container">
    @if($message = Session::get('message'))
    <div class="alert alert-warning alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ $message}}
    </div>
    @endif

    <div class="container">
 
           
      <form class="" action="{{ route ('seating')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach($setting as $key =>$setting )
        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description"> Site logo:</label>
          <div class="col-sm-10">
            <div class="form-check-inline ">
              <label class="form-check-label "><input type="file" name="logo" accept="image/*" value=""></label>
              <span><img src="{{ asset($setting->logo)}}" width="100px" height="100px" alt=""></span>
              <span class="text-danger">{{ $errors->has('logo') ? $errors->first('logo') : ''}}</span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label " for="Description"> Site slider:</label>
          <div class="col-sm-10">
            <div class="form-check-inline ">
              <label class="form-check-label "><input type="file" multiple accept="image/*" name="sliderImage[]" value=""></label>
              @foreach($siliders as $key =>$silider )
              <span><img src="{{ asset($silider->sliderImage)}}" width="120px" height="120px" class="mr-1" alt=""></span>
               @endforeach
              <span class="text-danger">{{ $errors->has('sliderImage') ? $errors->first('sliderImage') : ''}}</span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Categories Name"> Site name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Categories Name" placeholder="Site_name...." value=" {{$setting->Site_name}} " name="Site_name">
            <span class="text-danger">{{ $errors->has('Site_name') ? $errors->first('Site_name') : ''}}</span>
          </div>
        </div>



        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Categories Name">twitter:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Categories Name" placeholder="twitter-link" value=" {{$setting->twitter}} " name="twitter">
            <span class="text-danger">{{ $errors->has('twitter') ? $errors->first('twitter') : ''}}</span>
            <input type="hidden"value="{{ $setting->id }}" name="id">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Categories Name">facebook:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Categories Name" placeholder="facebook-link" value=" {{$setting->facebook}} " name="facebook">
            <span class="text-danger">{{ $errors->has('facebook') ? $errors->first('facebook') : ''}}</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Categories Name">instagram:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Categories Name" placeholder="instagram-link" value=" {{$setting->instagram}} " name="instagram">
            <span class="text-danger">{{ $errors->has('instagram') ? $errors->first('instagram') : ''}}</span>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Categories Name">whatsapp:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Categories Name" placeholder="whatsapp-link" value=" {{$setting->whatsapp}} " name="whatsapp">
            <span class="text-danger">{{ $errors->has('whatsapp') ? $errors->first('whatsapp') : ''}}</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Categories Name">Email:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Categories Name" value=" {{$setting->Email}} " placeholder="Email" name="Email">
            <span class="text-danger">{{ $errors->has('Email') ? $errors->first('Email') : ''}}</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Categories Name">Phone:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Categories Name" placeholder="Phone" value="{{$setting->phone}}" name="phone">
            <span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : ''}}</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Description">Site Description:</label>
          <div class="col-sm-10">
            <textarea  class="form-control" rows="4" name="siteDescription">{{$setting->siteDescription}}</textarea>
            <span class="text-danger">{{ $errors->has('siteDescription') ? $errors->first('siteDescription') : ''}}</span>
          </div>
        </div>

      
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Description">About Page:</label>
          <div class="col-sm-10">
            <textarea id="summernote" class="form-control" rows="4" name="About"> {{$setting->About}}</textarea>
            <span class="text-danger">{{ $errors->has('About') ? $errors->first('About') : ''}}</span>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="Description">Privacy policy page:</label>
          <div class="col-sm-10">
            <textarea id="summernote1" class="form-control" rows="4" name="Privacy"> {{$setting->Privacy}}</textarea>
            <span class="text-danger">{{ $errors->has('Privacy') ? $errors->first('siteDescription') : ''}}</span>
          </div>
        </div>
        <div class="form-group row ">
          <div class=" col-sm-10">
            <button type="submit" class="btn btn-success">Update Site setting</button>
          </div>
        </div>
      </form>
     
            @endforeach
    </div>
  </div>
 
  @endsection
  @section('style')
  <title>Summernote with Bootstrap 4</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#summernote1').summernote();
    });
  </script>

  @endsection