<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @extends('layouts.app')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('images/logo.jpg')}}">
         @section('title', '| Home')

        <!-- Fonts -->

        <!-- Styles -->



    </head>
    <body>

    @section('content')
        <div class="container">


            <div id="myCarousel" class="carousel slide" data-ride="carousel">


                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('images/blood-finder.jpg')}}" alt="blood finder" style="width:100%; height:500px;">
                    </div>

                    <div class="item">
                        <img src="{{asset('images/banner_1.jpg')}}" alt="banner1" style="width:100%; height:500px;">
                    </div>

                    <div class="item">
                        <img src="{{asset('images/banner2.jpg')}}" alt="bammer2" style="width:100%; height:500px;">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/banner3.png')}}" alt="banner3" style="width:100%; height:500px;">
                    </div>



                </div>

                <!-- Left and right controls -->
                {{--<a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
                    {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
                    {{--<span class="sr-only">Previous</span>--}}
                {{--</a>--}}
                {{--<a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
                    {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                    {{--<span class="sr-only">Next</span>--}}
                {{--</a>--}}
            </div>

            <main>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="box-header ">
                            <div class="text-left">

                                <img src="{{asset('images/blood-finder.jpg')}}" class="img-circle" alt="help" width="304" height="236">
                            </div>
                            <h4 class="card-header">how we helps to find blood</h4>

                            <p class="card-text" style="padding-left:2%">🙏
                                We are the member of fresh blood donor group and we used to collect blood data from various cities of nepal for emergency purpose.In the event that there is any patient who require blood for crisis case we call our doners who are prepared for blood donation.Our only intention is to provide fresh blood directly to the inneed patients , so hoping you would be part of our helping hand</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="box-header ">
                            <div class="text-left">

                                <img src="{{asset('images/blood1.jpg')}}" class="img-circle" alt="blood distribution" width="304" height="236">
                            </div>
                            <h4 class="card-header">Distribution Of Blood</h4>

                            <p class="card-text" style="padding-left:2%">  In the Nepal, the average distribution of blood types is as follows:.</p>
                            <ul>
                                <li> O POsitive: 35.2% </li>
                                <li> A POsitive: 28.3% </li>
                                <li> B POsitive: 27.1%</li>
                                <li> AB POsitive: 8.6%</li>
                                <li> O Negative: 0.3%</li>
                                <li> A Negative: 0.2% </li>
                                <li> B Negative: 0.2%</li>
                                <li> AB Negative: 0.1% </li>


                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="box-header ">
                            <div class="text-left">

                                <img src="{{asset('images/blood-donor.jpg')}}" class="img-circle" alt="blood donor" width="304" height="236">
                            </div>

                            <h4 class="card-header">BLOOD GROUPS</h4>
                        </div>
                        <div class="box-body">

                            <p class="card-text" style="padding-left:2%">blood group of any human being will mainly fall in any one of the following groups.</p>
                            <ul>
                                <li>A positive or A negative</li>
                                <li>B positive or B negative</li>
                                <li>O positive or O negative</li>
                                <li>AB positive or AB negative.</li>
                            </ul>
                            <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! </p>

                        </div>



                    </div>
                </div>



            </main>











        </div>

        @include('includes.footer')

    @endsection

    </body>
</html>
