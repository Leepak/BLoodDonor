<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->

@extends('layouts.app')
<link rel="icon" type="image/png" href="{{asset('images/logo.jpg')}}">
@section('title', '| Forget Password')



@section('content')
    <body class="hold-transition">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    {{ __('Reset Password') }}

                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="panel panel-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <div style=" color:#FF0000;">   <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span></div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>



                </div>


            </div>







        </div>
    </div>
    </div>



    </body>
    @include('includes.footer')
@endsection
