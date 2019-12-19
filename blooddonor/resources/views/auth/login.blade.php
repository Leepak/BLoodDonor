<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->

@extends('layouts.app')
<link rel="icon" type="image/png" href="{{asset('images/logo.jpg')}}">
@section('title', '| Login')



@section('content')
    <body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <!-- Error Message -->
            @if (Session::has('flash_msg'))
                <div class="alert alert-danger">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_msg') }}
                </div>
            @endif

            <form method="POST" action="{{ ('/Login') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" />
                    <span class="fa fa-envelope form-control-feedback"></span>
                    <div style=" color:#FF0000;">   <span>{{ $errors->first('email') }}</span>  </div>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                    <span class="fa fa-lock form-control-feedback"></span>
                    <div style=" color:#FF0000;">   <span>{{ $errors->first('password') }}</span>  </div>

                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In" />
                    </div><!-- /.col -->





                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        </div>
                    </div>
                </div>





            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->


    <!-- jQuery 2.2.3 -->

    </body>
    @include('includes.footer')
@endsection
