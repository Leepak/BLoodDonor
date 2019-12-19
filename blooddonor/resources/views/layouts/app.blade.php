<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'BloodDonor') }}</title>--}}
    <title>Blood Donor  @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


    <!-- Font Awesome -->
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">



    <style>


        #app{
            font-size: 14px;

        }


    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-laravel">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                            <img src="{{ asset('images/logo.jpg') }}" class="img-circle" alt="logo" width="70px" height="70px">
                            <a class="img-circle" href="{{ ('/') }}"><large>Blood Donor </large></a>
                    {{--<a class="navbar-brand" href="#">Laravel</a>--}}
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="col-md-4">
                        <script>
                            (function() {
                                var cx = '008750791233126681657:a8xz4z05d6c';
                                var gcse = document.createElement('script');
                                gcse.type = 'text/javascript';
                                gcse.async = true;
                                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(gcse, s);
                            })();
                        </script>
                        <gcse:search></gcse:search>

                    </div>


                    <ul class="navbar-nav mr-auto">
                    <div class="nav navbar-nav pull-right">

                        <li class="active"><a href="{{('/')}}">Home <span class="sr-only">(current)</span></a></li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ ('/Register') }}">Donar Register</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ ('BloodRequest') }}">Request Blood</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link " href="{{ ('/contact') }}">{{ __('Contact US') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/login') }}">{{ __('Login') }}</a>
                        </li>

                    </div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


    </div>


    <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>





</body>
</html>
