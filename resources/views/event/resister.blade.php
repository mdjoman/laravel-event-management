@extends('event.master')
@section('body')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .login-container {
        margin-top: 15%;
        margin-bottom: 5%;
    }

    .login-form-1 {
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-1 h3 {
        text-align: center;
        color: #333;
    }

    .login-form-2 {
        padding: 5%;
        background: #0062cc;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-2 h3 {
        text-align: center;
        color: #fff;
    }

    .login-container form {
        padding: 10%;
    }

    .btnSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        border: none;
        cursor: pointer;
    }

    .login-form-1 .btnSubmit {
        font-weight: 600;
        color: #fff;
        background-color: #0062cc;
    }

    .login-form-2 .btnSubmit {
        font-weight: 600;
        color: #0062cc;
        background-color: #fff;
    }

    .login-form-2 .ForgetPwd {
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }

    .login-form-1 .ForgetPwd {
        color: red;
        font-weight: 600;
        text-decoration: none;
    }
</style>



<div class="container login-container">
    <div class="row">
        @if($message = Session::get('message'))
        <div class="alert alert-warning alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ $message}}
        </div>
        @endif
       
        <div class="col-md-6 login-form-1">

            <h3>Apply for Premium Member </h3>
            <form action="{{route('resister')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your name *" name="email" value="" />
                    <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Phone Number*" name="phone" value="" />
                    <span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : ''}}</span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Submit" />
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Note:You have to pay 1000 tk to become a premium member. </a>
                </div>
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <h3>Login</h3>
            <form action="{{route('coustomar-login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Your phone *" name="phone" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Access Code *" name="access_code" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>

            </form>
            <div class="form-group">

                <a href="{{route('contuct')}}" class="ForgetPwd" value="Login">Forget access_code(Contact Us)</a>
            </div>
        </div>
    </div>
</div>
@endsection