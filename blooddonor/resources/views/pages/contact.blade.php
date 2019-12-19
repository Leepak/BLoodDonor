<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@extends('layouts.app')
<link rel="icon" type="image/png" href="{{asset('images/logo.jpg')}}">
@section('title', '| Contact Us')


@section('content')
    <div class="container">

        <div id="contact-info">
                <div class="col-md-4">
                    <div class="panel panel-default" style="height:3cm; padding-top:10px;">
                        <div class="panel-body">
                            <div class="text-center">
                                <i class="fa fa-map-marker fa-2x"></i>
                                <p><a href=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.647982953197!2d85.33404010000002!3d27.707281200000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b03435b163%3A0x9083ab14910aa6cd!2sInmanual+Boys+Hostel!5e0!3m2!1sen!2snp!4v1547658436865" target="_blank">
                                        Maitidevi, Kathmandu, Nepal</a></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default" style="height:3cm; padding-top:10px;">
                        <div class="panel-body">
                            <div class="text-center">
                                <i class="fa fa-envelope-o fa-2x"></i>
                                <p><a href="mailto:info@freshblooddonorfinder.com"> &nbsp;info@freshblooddonorfinder.com </a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default" style="height:3cm; padding-top:10px;">
                        <div class="panel-body">
                            <div class="text-center">
                                <i class="fa fa-phone fa-2x"></i>
                                <p><a href="tel://+9779846467614">+977 9846467614</a></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

            <div class="contact">

                <a href="#" class="btn btn-info btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms"><i class="fa fa-paper-plane"></i>  GET IN TOUCH</a>
                <h4>Please fill out the form below to send us an email and we will get back to you as soon as possible.</h4>
           <hr>
            </div>


        <div class="container">
            <div class="row">






                <div id="signupbox"  class="mainbox col-md-6  col-sm-offset-3">
                    <div class="jumbotron">


                    <div class="panel panel-default" >

                        <div class="panel-body" >
                            <div class="error">
                                @if (Session::has('flash_msg'))
                                    <div class="alert alert-success">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ Session::get('flash_msg') }}
                                    </div>
                                @endif
                            </div>

                            <form action="{{ url('/Message') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="control-group form-group">
                                <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" name="fullname" placeholder="Enter your FullName.">
                                    @if(!empty($errors->first()))
                                        <div style=" color:#FF0000;">   <span>{{ $errors->first('fullname') }}</span>  </div>

                                    @endif
                                </div>
                                </div>

                                <div class="control-group form-group">
                                <div class="controls">
                                <label>Phone Number:</label>
                                <input  maxlength="10" type="int" class="form-control" id="phone" name="phone"  placeholder=" Enter your 10 digits phone number.">
                                <div style=" color:#FF0000;">   <span>{{ $errors->first('phone') }}</span>  </div>
                                </div>
                                </div>

                                <div class="control-group form-group">
                                <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder=" Enter your email address.">
                                    @if(!empty($errors->first()))
                                        <div style=" color:#FF0000;">   <span>{{ $errors->first('email') }}</span>  </div>

                                    @endif
                                </div>
                                </div>

                                <div class="control-group form-group">
                                <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder=" Write your message" maxlength="999" style="resize:none"> </textarea>
                                    @if(!empty($errors->first()))
                                        <div style=" color:#FF0000;">   <span>{{ $errors->first('message') }}</span>  </div>

                                    @endif
                                </div>
                                </div>
                                <div id="success"></div>
                                <!-- For success/fail messages -->
                                <button type="submit" name="send"  class="btn btn-primary">Send Message</button>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>




        </main>











        {{--<!-- Page Heading/Breadcrumbs -->--}}
        {{--<h1 class="mt-4 mb-3">Contact</h1>--}}

        {{--<ol class="breadcrumb">--}}
            {{--<li class="breadcrumb-item">--}}
                {{--<a href="index.blade.php">Home</a>--}}
            {{--</li>--}}
            {{--<li class="breadcrumb-item active">Contact</li>--}}
        {{--</ol>--}}

        {{--<!-- Content Row -->--}}
        {{--<div class="row">--}}
            {{--<!-- Map Column -->--}}
            {{--<div class="col-lg-8 mb-4">--}}
                {{--<h3>Send us a Message</h3>--}}

                {{--<form  name="sentMessage" method="post" action="#" enctype="multipart/form-data">--}}
                    {{--<div class="control-group form-group">--}}
                        {{--<div class="controls">--}}
                            {{--<label>Full Name:</label>--}}
                            {{--<input type="text" class="form-control" id="name" name="fullname" placeholder="Enter your FullName.">--}}
                            {{--<div style=" color:#FF0000;"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="control-group form-group">--}}
                        {{--<div class="controls">--}}
                            {{--<label>Phone Number:</label>--}}
                            {{--<input  maxlength="10" type="int" class="form-control" id="phone" name="mobile"  placeholder=" Enter your 10 digits phone number.">--}}
                            {{--<div style=" color:#FF0000;"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="control-group form-group">--}}
                        {{--<div class="controls">--}}
                            {{--<label>Email Address:</label>--}}
                            {{--<input type="email" class="form-control" id="email" name="email" placeholder=" Enter your email address.">--}}
                            {{--<div style=" color:#FF0000;"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="control-group form-group">--}}
                        {{--<div class="controls">--}}
                            {{--<label>Message:</label>--}}
                            {{--<textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder=" Write your message" maxlength="999" style="resize:none"> </textarea>--}}
                            {{--<div style=" color:#FF0000;"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="success"></div>--}}
                    {{--<!-- For success/fail messages -->--}}
                    {{--<button type="submit" name="send"  class="btn btn-primary">Send Message</button>--}}
                {{--</form>--}}
            {{--</div>--}}

            {{--<!-- Contact Details Column -->--}}

        {{--</div>--}}
        <!-- /.row -->


    </div>
    @include('includes.footer')
@endsection
